# ICS 325 – Web Application Development
## Metropolitan State University
### Module: Errors, Exception Handling, Debugging & Logging
**Stack: HTML / CSS / JavaScript / jQuery / Bootstrap (Frontend) | PHP (Backend) | MySQL (Database)**

---

## Table of Contents
1. [Errors in Web Applications](#1-errors-in-web-applications)
2. [Exception Handling](#2-exception-handling)
3. [Debugging](#3-debugging)
4. [Logging](#4-logging)
5. [Putting It All Together – A Full-Stack Example](#5-putting-it-all-together--a-full-stack-example)
6. [Bonus Tool – Session Debugger (`session_debug.php`)](#6-bonus-tool--session-debugger-session_debugphp)

---

## 1. Errors in Web Applications

### 1.1 What Is an Error?
An **error** is any unintended behavior or failure that prevents your application from working correctly. Errors can occur at many layers of the stack — in the browser, in PHP, or in the database.

### 1.2 Types of Errors by Layer

#### 🖥️ Frontend Errors (HTML / CSS / JS / jQuery / Bootstrap)

| Type | Description | Example |
|------|-------------|---------|
| **Syntax Error** | Incorrect code structure | Missing closing `}` in JS |
| **Runtime Error** | Occurs during execution | Calling a function that doesn't exist |
| **Logic Error** | Code runs but produces wrong output | Using `=` instead of `==` in a condition |
| **Reference Error** | Variable or function not defined | `console.log(userName)` before declaring `userName` |
| **Type Error** | Operation on wrong data type | Calling `.toUpperCase()` on a number |
| **Network/AJAX Error** | Failed HTTP requests | 404 when fetching data via `$.ajax()` |
| **DOM Error** | Accessing an element that doesn't exist | `document.getElementById("btn").click()` when `btn` is absent |

**Example – JavaScript Runtime Error:**
```javascript
// ❌ This will throw a TypeError
let price = "19.99";
let discounted = price * 0.9; // Accidentally a string, but JS coerces it — be careful!
console.log(discounted.toFixed(2)); // Works here, but logic may be wrong
```

**Example – jQuery AJAX Error:**
```javascript
$.ajax({
  url: "get_products.php",
  method: "GET",
  success: function(data) {
    console.log("Data received:", data);
  },
  error: function(xhr, status, error) {
    // xhr.status gives HTTP status code (404, 500, etc.)
    console.error("AJAX Error:", status, error);
    alert("Could not load products. Status: " + xhr.status);
  }
});
```

---

#### ⚙️ Backend Errors (PHP)

| Type | Description | Example |
|------|-------------|---------|
| **Parse/Syntax Error** | PHP code cannot be compiled | Missing `;` or mismatched `{}` |
| **Fatal Error** | Stops script execution | Calling undefined function |
| **Warning** | Non-fatal issue, script continues | Including a file that doesn't exist |
| **Notice** | Minor issue, undefined variable | `echo $name;` without initializing `$name` |
| **Deprecated** | Using outdated functions | Using `mysql_*` instead of `mysqli_*` |

**Example – PHP Fatal Error:**
```php
<?php
// ❌ Fatal Error: function does not exist
$result = calculateTax(100); // Function never defined
echo $result;
?>
```

**PHP Error Levels (most important ones):**
```php
E_ERROR      // Fatal — stops script
E_WARNING    // Non-fatal — script continues
E_NOTICE     // Minor issues (undefined vars, etc.)
E_ALL        // All errors and warnings
```

---

#### 🗄️ Database Errors (MySQL via PHP)

| Type | Description | Example |
|------|-------------|---------|
| **Connection Error** | Cannot connect to the database | Wrong host/password |
| **Query Syntax Error** | Malformed SQL | Missing `WHERE` clause or typo in column name |
| **Constraint Violation** | Breaks a DB rule | Duplicate primary key, NULL in NOT NULL column |
| **No Results** | Query succeeds but returns nothing | `SELECT` with a wrong condition |
| **Injection Vulnerability** | User input breaks SQL logic | Classic SQL injection attack |

**Example – MySQL Connection Error:**
```php
<?php
$conn = new mysqli("localhost", "root", "wrongpassword", "mydb");

if ($conn->connect_error) {
    // ❌ This is a connection error
    die("Connection failed: " . $conn->connect_error);
}
?>
```

---

## 2. Exception Handling

### 2.1 What Is Exception Handling?
**Exception handling** is the process of responding gracefully to errors instead of letting your application crash. It separates the "happy path" from the "error path."

> 💡 **Key Idea:** Don't let your users see raw error messages. Catch errors, log them silently, and show friendly messages.

---

### 2.2 JavaScript – try / catch / finally

**Basic Syntax:**
```javascript
try {
  // Code that might throw an error
  let result = riskyOperation();
} catch (error) {
  // Handle the error
  console.error("Something went wrong:", error.message);
} finally {
  // Always runs, error or not (great for cleanup)
  console.log("Operation attempted.");
}
```

**Real-World Example – Parsing JSON from PHP:**
```javascript
$.ajax({
  url: "get_user.php",
  method: "POST",
  data: { user_id: 5 },
  success: function(response) {
    try {
      let user = JSON.parse(response);
      $("#username").text(user.name);
    } catch (e) {
      console.error("Invalid JSON returned:", e.message);
      $("#username").text("Error loading user.");
    }
  },
  error: function(xhr) {
    console.error("Request failed:", xhr.status);
    $("#username").text("Could not reach the server.");
  }
});
```

**Throwing Custom Errors:**
```javascript
function validateAge(age) {
  if (age < 0 || age > 120) {
    throw new RangeError("Age must be between 0 and 120.");
  }
  return true;
}

try {
  validateAge(-5);
} catch (e) {
  if (e instanceof RangeError) {
    alert("Validation Error: " + e.message);
  }
}
```

---

### 2.3 PHP – try / catch / finally

**Basic Syntax:**
```php
<?php
try {
    // Code that might throw an exception
    $result = riskyDatabaseQuery();
} catch (Exception $e) {
    // Handle specific exception
    error_log("Exception: " . $e->getMessage());
    echo json_encode(["status" => "error", "message" => "Something went wrong."]);
} finally {
    // Cleanup (e.g., close DB connection)
    $conn->close();
}
?>
```

**PHP Exception Hierarchy:**
```
Throwable
├── Error         (PHP internal errors: TypeError, ParseError, etc.)
└── Exception     (Application-level exceptions)
    ├── RuntimeException
    ├── InvalidArgumentException
    ├── PDOException
    └── (Your Custom Exceptions)
```

**Custom Exception Class:**
```php
<?php
class DatabaseException extends RuntimeException {
    public function __construct($message, $code = 0, $previous = null) {
        parent::__construct($message, $code, $previous);
    }
}
?>
```

**Real-World Example – Database Query with Exception Handling:**
```php
<?php
header("Content-Type: application/json");

function getProduct($conn, $product_id) {
    if (!is_numeric($product_id)) {
        throw new InvalidArgumentException("Product ID must be a number.");
    }

    $stmt = $conn->prepare("SELECT * FROM products WHERE id = ?");
    if (!$stmt) {
        throw new RuntimeException("Query preparation failed: " . $conn->error);
    }

    $stmt->bind_param("i", $product_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 0) {
        throw new RuntimeException("Product not found.");
    }

    return $result->fetch_assoc();
}

try {
    $conn = new mysqli("localhost", "root", "password", "shop_db");
    if ($conn->connect_error) {
        throw new RuntimeException("DB Connection failed: " . $conn->connect_error);
    }

    $product = getProduct($conn, $_GET['id'] ?? null);
    echo json_encode(["status" => "success", "data" => $product]);

} catch (InvalidArgumentException $e) {
    http_response_code(400); // Bad Request
    echo json_encode(["status" => "error", "message" => $e->getMessage()]);

} catch (RuntimeException $e) {
    http_response_code(500); // Internal Server Error
    error_log("[ERROR] " . $e->getMessage()); // Log — don't expose to user
    echo json_encode(["status" => "error", "message" => "Server error. Please try again."]);

} finally {
    if (isset($conn)) $conn->close();
}
?>
```

---

### 2.4 SQL Injection Prevention (Exception Handling + Security)

> ⚠️ **Never** concatenate user input directly into SQL queries!

```php
<?php
// ❌ VULNERABLE — NEVER DO THIS
$id = $_GET['id'];
$query = "SELECT * FROM users WHERE id = $id"; // SQL Injection risk!

// ✅ SAFE — Use Prepared Statements
$stmt = $conn->prepare("SELECT * FROM users WHERE id = ?");
$stmt->bind_param("i", $id); // "i" = integer type
$stmt->execute();
?>
```

---

## 3. Debugging

### 3.1 What Is Debugging?
**Debugging** is the systematic process of finding and fixing errors in your code. Good debuggers use both tools and strategies — not just `console.log` everywhere!

---

### 3.2 Frontend Debugging (Browser DevTools)

#### Opening DevTools
- **Chrome/Edge:** Press `F12` or right-click → Inspect
- **Firefox:** Press `F12` or right-click → Inspect Element

#### Key DevTools Panels

| Panel | Purpose |
|-------|---------|
| **Console** | View JS errors, log output |
| **Sources** | Set breakpoints, step through JS code |
| **Network** | Inspect HTTP requests/responses (AJAX calls) |
| **Elements** | Inspect and modify HTML/CSS live |
| **Application** | View cookies, localStorage, sessionStorage |

#### Console Debugging Techniques
```javascript
// Basic logging
console.log("Value:", myVariable);

// Warning (yellow)
console.warn("This is deprecated");

// Error (red)
console.error("Something broke:", error);

// Grouped output
console.group("User Object");
console.log("Name:", user.name);
console.log("Email:", user.email);
console.groupEnd();

// Table (great for arrays of objects)
console.table(productsArray);

// Timer
console.time("fetchTime");
// ... some operation
console.timeEnd("fetchTime"); // Prints elapsed time
```

#### Setting Breakpoints in DevTools
1. Open **Sources** panel
2. Find your `.js` file
3. Click the line number to set a breakpoint (blue marker appears)
4. Reload the page — execution pauses at your breakpoint
5. Use **Step Over (F10)**, **Step Into (F11)**, **Resume (F8)**

#### Debugging jQuery AJAX Calls
```javascript
// Always check the Network tab for:
// - Request URL (is it correct?)
// - Request Method (GET vs POST)
// - Response Body (is PHP returning valid JSON?)
// - Status Code (200 OK, 404 Not Found, 500 Server Error)

$.ajax({
  url: "save_form.php",
  method: "POST",
  data: $("#myForm").serialize(),
  beforeSend: function() {
    console.log("Sending AJAX request...");
  },
  success: function(data) {
    console.log("Raw response:", data);   // Check this first!
    try {
      let parsed = JSON.parse(data);
      console.log("Parsed:", parsed);
    } catch(e) {
      console.error("PHP returned non-JSON:", data);
    }
  },
  error: function(xhr, status, error) {
    console.error("Status:", xhr.status);
    console.error("Response:", xhr.responseText); // May show PHP error
  }
});
```

---

### 3.3 Backend Debugging (PHP)

#### PHP Error Reporting
```php
<?php
// Development — show all errors on screen
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Production — NEVER display errors to users!
ini_set('display_errors', 0);
error_reporting(E_ALL);
ini_set('log_errors', 1);
ini_set('error_log', '/var/log/php_errors.log');
?>
```

#### Var Dump & Print_R (Quick Debugging)
```php
<?php
$user = ["name" => "Alice", "age" => 22, "active" => true];

// Shows type + value (best for debugging)
var_dump($user);

// Human-readable output (use true to return as string)
print_r($user);

// Die immediately after (to stop execution at a point)
var_dump($user); die();
?>
```

#### Debugging Database Queries
```php
<?php
$conn = new mysqli("localhost", "root", "password", "mydb");

$name = "Alice";
$stmt = $conn->prepare("SELECT * FROM users WHERE name = ?");

if (!$stmt) {
    // Debug: Print prepare error
    die("Prepare failed: " . $conn->error);
}

$stmt->bind_param("s", $name);

if (!$stmt->execute()) {
    // Debug: Print execute error
    die("Execute failed: " . $stmt->error);
}

$result = $stmt->get_result();
echo "Rows found: " . $result->num_rows; // Quick sanity check
?>
```

#### PHP Xdebug (Advanced – Recommended for Local Dev)
Xdebug is a PHP extension that allows **step-through debugging** in IDEs like VS Code.

**Quick Setup for VS Code:**
1. Install Xdebug PHP extension (`pecl install xdebug`)
2. Add to `php.ini`:
   ```ini
   zend_extension=xdebug
   xdebug.mode=debug
   xdebug.start_with_request=yes
   xdebug.client_port=9003
   ```
3. Install **PHP Debug** extension in VS Code
4. Set breakpoints in your `.php` files and press F5

---

### 3.4 Database Debugging (MySQL)

#### Test Queries in phpMyAdmin or MySQL CLI
Before putting SQL in PHP, always test it in **phpMyAdmin → SQL tab** first!

```sql
-- Check if query returns expected results
SELECT * FROM products WHERE category = 'Electronics' AND price < 500;

-- Check for duplicate entries
SELECT email, COUNT(*) as cnt FROM users GROUP BY email HAVING cnt > 1;

-- Check foreign key relationships
SELECT o.id, u.name, o.total
FROM orders o
JOIN users u ON o.user_id = u.id
WHERE o.status = 'pending';
```

#### Common MySQL Debug Queries
```sql
-- Show all tables in current database
SHOW TABLES;

-- Show structure of a table
DESCRIBE products;

-- Show last error (within MySQL CLI)
SHOW ERRORS;

-- Check query execution plan
EXPLAIN SELECT * FROM orders WHERE user_id = 10;
```

---

## 4. Logging

### 4.1 Why Logging Matters
Logging is your **black box recorder** for web applications. When something breaks in production, logs tell you what happened, when, and why — without needing to reproduce the error manually.

> 💡 **Rule of thumb:** Debug while developing. Log for production.

---

### 4.2 Log Levels (Standard Convention)

| Level | When to Use |
|-------|-------------|
| **DEBUG** | Detailed dev info (query params, variable states) |
| **INFO** | Normal application events (user logged in, order placed) |
| **WARNING** | Unexpected but handled situations (deprecated function used) |
| **ERROR** | Failures that affected one request (query failed, file not found) |
| **CRITICAL** | System-wide failures (DB is down, disk full) |

---

### 4.3 PHP Logging

#### Built-in `error_log()`
```php
<?php
// Log to PHP's default error log
error_log("User login attempt for: " . $email);

// Log to a custom file
error_log("[ERROR] Failed to load product #" . $id, 3, "/var/log/myapp.log");

// Log to system logger (syslog)
openlog("MyWebApp", LOG_PID | LOG_PERROR, LOG_LOCAL0);
syslog(LOG_WARNING, "Low inventory for product #" . $id);
closelog();
?>
```

#### Custom Logger Class
```php
<?php
class Logger {
    private string $logFile;

    public function __construct(string $logFile = "app.log") {
        $this->logFile = $logFile;
    }

    private function write(string $level, string $message): void {
        $timestamp = date("Y-m-d H:i:s");
        $entry = "[$timestamp] [$level] $message" . PHP_EOL;
        file_put_contents($this->logFile, $entry, FILE_APPEND | LOCK_EX);
    }

    public function info(string $message): void    { $this->write("INFO", $message); }
    public function warning(string $message): void { $this->write("WARNING", $message); }
    public function error(string $message): void   { $this->write("ERROR", $message); }
    public function debug(string $message): void   { $this->write("DEBUG", $message); }
}

// Usage
$logger = new Logger("logs/app.log");
$logger->info("User #42 logged in successfully.");
$logger->error("Payment gateway timeout for order #1001.");
$logger->debug("Query: SELECT * FROM users WHERE id = 42");
?>
```

**Sample log output (`app.log`):**
```
[2025-10-14 09:31:05] [INFO] User #42 logged in successfully.
[2025-10-14 09:31:12] [ERROR] Payment gateway timeout for order #1001.
[2025-10-14 09:31:12] [DEBUG] Query: SELECT * FROM users WHERE id = 42
```

#### Using Monolog (Industry Standard PHP Logger)
```php
<?php
require 'vendor/autoload.php';
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$log = new Logger('WebApp');
$log->pushHandler(new StreamHandler('logs/app.log', Logger::DEBUG));

$log->info('User logged in', ['user_id' => 42, 'ip' => $_SERVER['REMOTE_ADDR']]);
$log->error('DB query failed', ['query' => $sql, 'error' => $conn->error]);
?>
```

---

### 4.4 JavaScript / Frontend Logging

#### Console Logging (Development Only)
```javascript
// Create a simple logger utility
const AppLogger = {
  log:   (msg, data = null) => console.log(`[INFO]  ${msg}`, data ?? ""),
  warn:  (msg, data = null) => console.warn(`[WARN]  ${msg}`, data ?? ""),
  error: (msg, data = null) => console.error(`[ERROR] ${msg}`, data ?? ""),
  debug: (msg, data = null) => console.debug(`[DEBUG] ${msg}`, data ?? "")
};

AppLogger.log("Page loaded successfully.");
AppLogger.warn("Deprecated function called: getUser()");
AppLogger.error("AJAX request failed", { status: 500, url: "save.php" });
```

#### Sending Frontend Errors to the Server
When JavaScript crashes in production, you want to know about it. Use `window.onerror` or `fetch` to send errors to a PHP logger endpoint.

```javascript
// Global JS error catcher
window.onerror = function(message, source, lineno, colno, error) {
  fetch("log_js_error.php", {
    method: "POST",
    headers: { "Content-Type": "application/json" },
    body: JSON.stringify({
      message: message,
      source: source,
      line: lineno,
      column: colno,
      stack: error ? error.stack : null,
      url: window.location.href,
      time: new Date().toISOString()
    })
  });
  return false; // Let error propagate to console too
};
```

**`log_js_error.php` (receiver):**
```php
<?php
header("Content-Type: application/json");
$data = json_decode(file_get_contents("php://input"), true);

if ($data) {
    $logger = new Logger("logs/js_errors.log");
    $logger->error(
        "JS Error: " . $data['message'],
        [
            'url'    => $data['url'],
            'source' => $data['source'],
            'line'   => $data['line'],
            'stack'  => $data['stack']
        ]
    );
}
echo json_encode(["received" => true]);
?>
```

---

### 4.5 MySQL Query Logging

#### Enable MySQL General Query Log (Development)
```sql
-- Check current log status
SHOW VARIABLES LIKE 'general_log%';

-- Enable query logging
SET GLOBAL general_log = 'ON';
SET GLOBAL general_log_file = '/var/log/mysql/query.log';
```

#### Log Slow Queries
```sql
-- Enable slow query log (queries taking > 2 seconds)
SET GLOBAL slow_query_log = 'ON';
SET GLOBAL long_query_time = 2;
SET GLOBAL slow_query_log_file = '/var/log/mysql/slow.log';
```

> ⚠️ Always **disable** general query logging in production — it fills disk fast and can expose sensitive data!

---

## 5. Putting It All Together – A Full-Stack Example

This example demonstrates a **user registration form** with proper error handling, exception handling, debugging hooks, and logging across all layers.

### 5.1 HTML Form (Bootstrap)
```html
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>ICS 325 – Register</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="container mt-5">

  <h2>Register</h2>
  <div id="alertBox"></div>

  <form id="registerForm">
    <div class="mb-3">
      <label for="email" class="form-label">Email</label>
      <input type="email" class="form-control" id="email" name="email" required>
    </div>
    <div class="mb-3">
      <label for="password" class="form-label">Password</label>
      <input type="password" class="form-control" id="password" name="password" required>
    </div>
    <button type="submit" class="btn btn-primary" id="submitBtn">Register</button>
  </form>

  <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
  <script src="register.js"></script>
</body>
</html>
```

### 5.2 JavaScript with Error Handling & Logging (`register.js`)
```javascript
// Simple frontend logger
const Log = {
  info:  (m) => console.log("[INFO]", m),
  error: (m) => console.error("[ERROR]", m)
};

// Global error catcher
window.onerror = function(msg, src, line) {
  fetch("log_js_error.php", {
    method: "POST",
    headers: { "Content-Type": "application/json" },
    body: JSON.stringify({ message: msg, source: src, line: line })
  });
};

function showAlert(type, message) {
  // type: "success" | "danger" | "warning"
  $("#alertBox").html(
    `<div class="alert alert-${type} alert-dismissible fade show" role="alert">
       ${message}
       <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
     </div>`
  );
}

function validateForm(email, password) {
  if (!email || !password) throw new Error("All fields are required.");
  if (password.length < 8) throw new RangeError("Password must be at least 8 characters.");
  const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  if (!emailRegex.test(email)) throw new TypeError("Invalid email format.");
}

$("#registerForm").on("submit", function(e) {
  e.preventDefault();
  const email    = $("#email").val().trim();
  const password = $("#password").val();

  try {
    validateForm(email, password);
  } catch (validationError) {
    Log.error("Validation failed: " + validationError.message);
    showAlert("warning", validationError.message);
    return;
  }

  $("#submitBtn").prop("disabled", true).text("Registering...");
  Log.info("Submitting registration for: " + email);

  $.ajax({
    url: "register.php",
    method: "POST",
    data: { email: email, password: password },
    success: function(response) {
      try {
        let result = JSON.parse(response);
        if (result.status === "success") {
          showAlert("success", "Registration successful! Welcome, " + result.name);
          Log.info("Registration successful.");
        } else {
          showAlert("danger", result.message || "Registration failed.");
          Log.error("Server returned error: " + result.message);
        }
      } catch (parseError) {
        Log.error("Invalid JSON from server: " + response);
        showAlert("danger", "Unexpected server response.");
      }
    },
    error: function(xhr) {
      Log.error("AJAX error - Status: " + xhr.status + " | " + xhr.responseText);
      showAlert("danger", "Could not connect to the server. Please try again.");
    },
    complete: function() {
      $("#submitBtn").prop("disabled", false).text("Register");
    }
  });
});
```

### 5.3 PHP Backend with Exception Handling & Logging (`register.php`)
```php
<?php
header("Content-Type: application/json");
ini_set('display_errors', 0);   // NEVER show errors to users in production
error_reporting(E_ALL);

require_once "Logger.php"; // Our custom Logger class from Section 4.3
$logger = new Logger("logs/app.log");

function connectDB(): mysqli {
    $conn = new mysqli("localhost", "root", "password", "ics325_db");
    if ($conn->connect_error) {
        throw new RuntimeException("DB Connection failed: " . $conn->connect_error);
    }
    return $conn;
}

function registerUser(mysqli $conn, string $email, string $password): array {
    // Check if email already exists
    $stmt = $conn->prepare("SELECT id FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        throw new InvalidArgumentException("Email is already registered.");
    }
    $stmt->close();

    // Hash password — NEVER store plain text!
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

    // Insert new user
    $stmt = $conn->prepare("INSERT INTO users (email, password, created_at) VALUES (?, ?, NOW())");
    $stmt->bind_param("ss", $email, $hashedPassword);

    if (!$stmt->execute()) {
        throw new RuntimeException("Failed to insert user: " . $stmt->error);
    }

    return ["id" => $conn->insert_id, "email" => $email];
}

// ----- Main Logic -----
$conn = null;
try {
    // Input sanitization
    $email    = filter_var($_POST['email'] ?? '', FILTER_SANITIZE_EMAIL);
    $password = $_POST['password'] ?? '';

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        throw new InvalidArgumentException("Invalid email address.");
    }
    if (strlen($password) < 8) {
        throw new InvalidArgumentException("Password too short.");
    }

    $conn = connectDB();
    $user = registerUser($conn, $email, $password);

    $logger->info("New user registered: " . $email . " (ID: " . $user['id'] . ")");

    echo json_encode([
        "status"  => "success",
        "message" => "Account created!",
        "name"    => $user['email']
    ]);

} catch (InvalidArgumentException $e) {
    // Client-side mistakes — safe to show message
    $logger->warning("Registration validation failed: " . $e->getMessage());
    http_response_code(400);
    echo json_encode(["status" => "error", "message" => $e->getMessage()]);

} catch (RuntimeException $e) {
    // Server-side error — log details, hide from user
    $logger->error("Registration error: " . $e->getMessage());
    http_response_code(500);
    echo json_encode(["status" => "error", "message" => "Server error. Please try again later."]);

} finally {
    if ($conn) $conn->close();
}
?>
```

---

## 6. Bonus Tool – Session Debugger (`session_debug.php`)

### 6.1 What Are PHP Sessions?
When a user logs in to a web application, PHP uses **sessions** to remember who they are across multiple pages. Session data is stored on the server and linked to the user via a cookie (`PHPSESSID`).

```php
<?php
session_start();

// Store data in the session
$_SESSION['user_id']   = 42;
$_SESSION['username']  = "alice";
$_SESSION['role']      = "admin";
$_SESSION['logged_in'] = true;
?>
```

### 6.2 Why Debug Sessions?
Sessions are a very common source of bugs in web applications:
- "Why does my login keep logging me out?"
- "Why is the cart empty after I added items?"
- "Why can't I access the admin page even though I'm logged in?"

Without a way to **see** what's in `$_SESSION` right now, these bugs are hard to trace.

### 6.3 The Session Debugger Tool

Drop this file into your project root during development to instantly visualize all active session variables in a clean, readable table. **Remove it before going to production.**

```php
<?php
// session_debug.php — remove after debugging
if (session_status() === PHP_SESSION_NONE) { session_start(); }

function h($v) { return htmlspecialchars((string)$v, ENT_QUOTES, 'UTF-8'); }

function mask_if_sensitive(string $key, $val) {
  foreach (['password','pwd','token','secret','apikey','api_key','authorization','auth','hash'] as $needle) {
    if (stripos($key, $needle) !== false) return '***';
  }
  return $val;
}

function render_val($val): string {
  if (is_bool($val))    return $val ? 'true' : 'false';
  if ($val === null)    return 'null';
  if (is_scalar($val)) return h($val);
  // arrays/objects displayed as pretty JSON
  return '<pre style="margin:0">'.h(json_encode($val, JSON_PRETTY_PRINT|JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE)).'</pre>';
}
?>
<!doctype html><html><head><meta charset="utf-8">
<title>Session Dump</title>
<style>
  body { font-family: system-ui, -apple-system, Segoe UI, Roboto, Arial, sans-serif; margin:24px; }
  table { width:100%; border-collapse:collapse; }
  th, td { text-align:left; padding:8px 10px; border-bottom:1px solid #eee; vertical-align:top; }
  th { background:#f6f6f6; }
  .muted { color:#666; }
</style>
</head><body>
  <h1>$_SESSION (<?= count($_SESSION) ?> keys)</h1>
  <table>
    <tr><th style="width:28%">Key</th><th style="width:12%">Type</th><th>Value</th></tr>
    <?php if (empty($_SESSION)): ?>
      <tr><td colspan="3" class="muted">No session variables set.</td></tr>
    <?php else: ?>
      <?php foreach ($_SESSION as $k => $v): ?>
        <?php $display = mask_if_sensitive((string)$k, $v); ?>
        <tr>
          <td><code><?= h((string)$k) ?></code></td>
          <td class="muted"><?= h(gettype($v)) ?></td>
          <td><?= render_val($display) ?></td>
        </tr>
      <?php endforeach; ?>
    <?php endif; ?>
  </table>
</body></html>
```

### 6.4 How to Use It

1. **Copy** `session_debug.php` into your project root (same level as `index.php`)
2. **Log in** to your application as usual to populate the session
3. **Visit** `http://localhost/your-project/session_debug.php` in the browser
4. You'll see a table like this:

| Key | Type | Value |
|-----|------|-------|
| `user_id` | integer | `42` |
| `username` | string | `alice` |
| `role` | string | `admin` |
| `logged_in` | boolean | `true` |
| `password` | string | `***` |
| `cart_items` | array | `{ "id": 5, "qty": 2 }` |

### 6.5 Key Features of This Tool

**🔒 Auto-masking of sensitive keys** — Any session key whose name contains `password`, `token`, `secret`, `apikey`, `auth`, or `hash` is automatically displayed as `***` so credentials are never accidentally exposed on screen.

**📋 Type-aware display** — Booleans show as `true`/`false`, nulls show as `null`, and arrays/objects are pretty-printed as JSON instead of showing the raw PHP dump.

**🛡️ XSS-safe output** — All values are passed through `htmlspecialchars()` via the `h()` helper, so malicious data stored in the session cannot execute as HTML or JavaScript in the debug view.

**📭 Graceful empty state** — If no session variables are set, it clearly says "No session variables set" instead of showing a broken or empty table.

### 6.6 Common Session Bugs This Tool Helps Diagnose

| Symptom | What to Look For in the Debugger |
|---------|----------------------------------|
| User gets logged out randomly | Is `user_id` missing from the table? Session may be expiring or not starting. |
| Wrong user data showing | Is `user_id` the correct value? May be a stale session from a previous login. |
| Admin page denies access | Is `role` set to `"admin"`? Check spelling and case exactly. |
| Cart items disappearing | Is `cart_items` present and correct? Check if `session_start()` is called on every page. |
| Session seems empty | 0 keys shown — `session_start()` may be missing or called after output. |

### 6.7 ⚠️ Important Security Warning

> **This file MUST be removed before deploying to production.**

Leaving `session_debug.php` accessible on a live server means **anyone** can visit it and see the session data of the currently logged-in user on that server process — including admin tokens, user IDs, and other sensitive state.

**Safe practices:**
```php
// Option 1: Restrict to local development only
if ($_SERVER['REMOTE_ADDR'] !== '127.0.0.1') {
    http_response_code(403);
    die("Forbidden.");
}

// Option 2: Add it to .gitignore so it's never committed
// .gitignore:
// session_debug.php

// Option 3: Use an environment check
if (getenv('APP_ENV') !== 'development') {
    http_response_code(403);
    die("Forbidden.");
}
```

---

## Quick Reference Cheat Sheet

| Layer | Catch Errors With | Debug With | Log With |
|-------|------------------|------------|----------|
| **HTML/CSS** | Browser validation, DevTools | DevTools Elements tab | N/A |
| **JavaScript** | `try/catch`, `window.onerror` | DevTools Console, Breakpoints | `console.*`, fetch to PHP logger |
| **jQuery AJAX** | `error:` callback | DevTools Network tab | Log status codes & responses |
| **PHP** | `try/catch/finally` | `var_dump()`, Xdebug | `error_log()`, custom Logger, Monolog |
| **MySQL** | Check `$conn->error`, `$stmt->error` | phpMyAdmin, `EXPLAIN` | General Query Log, Slow Query Log |
| **PHP Sessions** | Check `session_status()`, `session_start()` | `session_debug.php` (see §6) | Log session events (login, logout, expiry) |

---

## Best Practices Summary

1. **Never display raw PHP errors or DB errors to end users** — log them server-side, show friendly messages.
2. **Always use prepared statements** for any SQL involving user input — prevents SQL injection.
3. **Hash passwords with `password_hash()`** — never store plain text.
4. **Validate input on both sides** — JS for UX, PHP for security.
5. **Log everything meaningful** — use appropriate log levels (INFO, WARNING, ERROR).
6. **Use the Network tab** in DevTools to debug AJAX calls before touching PHP.
7. **Separate development and production configs** — verbose errors in dev, silent logging in prod.
8. **Test SQL queries in phpMyAdmin first** before embedding in PHP.
9. **Always use `finally`** to close DB connections and free resources.
10. **Check HTTP status codes** — 200 (OK), 400 (Bad Request), 404 (Not Found), 500 (Server Error).

---

*ICS 325 – Web Application Development | Metropolitan State University*
*Prepared for use with: HTML / CSS / JavaScript / jQuery / Bootstrap / PHP / MySQL*
