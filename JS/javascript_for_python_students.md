<!--
  JavaScript for Python Students — Learn and Help · Code For Good
  Brand colors (from the logo):
    Sunshine Yellow  #FFC300
    Sunset Orange    #FF6A00
    Flame Red        #E81A0A
    Deep Maroon      #7A0000
    Midnight Navy    #0B1B5A
    Soft Gray        #999999
  Best viewed in: VS Code (Ctrl+Shift+V / Cmd+Shift+V for preview), or any Markdown viewer with HTML support.
  Keep learn_and_help_logo.jpeg in the same folder as this file.
-->

<div align="center">

<img src="learn_and_help_logo.jpeg" alt="Learn and Help logo" width="220" />

<h1 style="color:#E81A0A; margin-bottom:0;">⚡ JavaScript for Python Students ⚡</h1>

<h3 style="color:#0B1B5A; margin-top:4px;">You already speak Python. Let's teach you a second language.</h3>

<p>
<img src="https://img.shields.io/badge/Learn%20and%20Help-Code%20For%20Good-FFC300?style=for-the-badge&labelColor=0B1B5A" alt="Learn and Help Code For Good" />
<img src="https://img.shields.io/badge/Level-Middle%20%26%20High%20School-FF6A00?style=for-the-badge&labelColor=0B1B5A" alt="Level" />
<img src="https://img.shields.io/badge/From-Python-E81A0A?style=for-the-badge&labelColor=0B1B5A" alt="From Python" />
<img src="https://img.shields.io/badge/To-JavaScript-7A0000?style=for-the-badge&labelColor=0B1B5A" alt="To JavaScript" />
</p>

<p><b><a href="https://www.learnandhelp.com" style="color:#FF6A00;">🌐 www.learnandhelp.com</a></b></p>

<div style="height:8px;background:linear-gradient(90deg,#FFC300,#FF6A00,#E81A0A,#7A0000);border-radius:6px;"></div>

</div>

<br/>

## 👋 Welcome, Coder!

Welcome to the **Learn and Help – Code For Good** class! 🎉

If you already know Python, you are **way ahead**. Variables, loops, functions, and lists work almost the same in JavaScript. Only the *spelling* (syntax) changes. Think of it like knowing Spanish and learning Portuguese. 🇪🇸➡️🇵🇹

**What is JavaScript, and why learn it?**

| 🌟 Reason | 💬 What it means |
|---|---|
| 🌐 **It runs the web** | Every website you use (YouTube, Instagram, Google) uses JavaScript. |
| 🖥️ **It runs everywhere** | Browser, servers (Node.js), phone apps, even games. |
| 🚀 **Instant results** | Open a browser and start coding, with nothing to install. |
| 💼 **Career power** | One of the most used programming languages in the world. |
| 🤝 **Code for Good** | You can build websites and tools that help your community! |

> 🎯 **Golden Rule of this guide:** In every section you'll see **🐍 Python** and **🟨 JavaScript** side by side. Spot the differences, then practice!

<br/>

---

## 📚 Table of Contents

| # | Topic | What you'll learn |
|:-:|---|---|
| 0 | [🛠️ Where to Write & Run JavaScript](#-0-where-to-write--run-javascript) | Online editors, browser console, VS Code, Node.js |
| 1 | [🖨️ print, input, type](#-1-print-input-and-type) | `console.log`, `prompt`, `typeof` |
| 2 | [📦 Data Types & Variables](#-2-data-types-and-variables) | `let`, `const`, numbers, strings, booleans |
| 3 | [🔀 Conditions & Boolean Logic](#-3-conditions-and-boolean-logic) | `if`, `else`, `&&`, `\|\|`, `switch` |
| 4 | [🔁 Iterations (Loops)](#-4-iterations-loops) | `for`, `while`, `for...of` |
| 5 | [🧩 Functions](#-5-functions) | `function`, arrow functions |
| 6 | [📁 File I/O](#-6-file-io) | Reading & writing files |
| 7 | [📋 Lists → Arrays](#-7-lists--arrays) | `push`, `map`, `filter` |
| 8 | [🔤 String Processing](#-8-string-processing) | `split`, `slice`, `replace` |
| 9 | [🎯 Sets](#-9-sets) | Unique values, `Set` |
| 10 | [📖 Dictionaries → Objects & Maps](#-10-dictionaries--objects-and-maps) | Key/value data, JSON |
| 11 | [🏗️ Objects & Classes](#-11-objects-and-classes) | `class`, `constructor`, `extends` |
| 12 | [🧾 Cheat Sheet & Gotchas](#-12-cheat-sheet--common-gotchas) | Quick reference |
| 13 | [🏆 Challenge Projects](#-13-challenge-projects) | Build something real! |

<br/>

---

## 🛠️ 0. Where to Write & Run JavaScript

<div style="height:6px;background:linear-gradient(90deg,#FFC300,#FF6A00,#E81A0A);border-radius:4px;"></div>

You have **two great options**. Start online (fastest), then move to VS Code (most professional).

### 🌐 Option A: Online (no install needed)

Perfect for school computers, Chromebooks, and tablets.

| Tool | Link | Best for |
|---|---|---|
| 🟧 **Browser Console** | Press **F12** (or **Ctrl+Shift+J** / **Cmd+Option+J**) → *Console* tab | Quick one-line experiments |
| 🟨 **JSFiddle** | https://jsfiddle.net | JS + HTML + CSS together |
| ⬛ **CodePen** | https://codepen.io | Visual, creative projects |
| 🟦 **StackBlitz** | https://stackblitz.com | Full projects in the browser |
| 🟥 **Replit** | https://replit.com | Complete online programming environment |
| ⚪ **OneCompiler** | https://onecompiler.com/javascript | Simple "write → run → see output" |

**Try it right now:**

1. Open any browser (Chrome, Edge, Firefox).
2. Press **F12** and click the **Console** tab.
3. Type this and press **Enter**:

```js
console.log("Hello, Learn and Help! 🚀");
```

🎉 You just ran your first JavaScript program!

### 💻 Option B: VS Code + Node.js (on your own computer)

**VS Code** is the editor (where you type). **Node.js** is the engine that runs JavaScript outside the browser, just like `python` runs `.py` files.

#### Step-by-step setup

| Step | What to do |
|:-:|---|
| **1** | Download and install **VS Code**: https://code.visualstudio.com |
| **2** | Download and install **Node.js** (choose the **LTS** version): https://nodejs.org |
| **3** | Open a terminal and check both are installed: `node --version` and `npm --version` |
| **4** | Create a folder, e.g. `learn-js`, then in VS Code choose **File → Open Folder** |
| **5** | Click **New File** and name it `hello.js` (the `.js` ending is important!) |
| **6** | Type your code, then **save** (`Ctrl+S` / `Cmd+S`) |
| **7** | Open the terminal in VS Code (**Ctrl+\`** / **Cmd+\`**) and run: `node hello.js` |

```js
// hello.js
console.log("Hello from VS Code! 💻");
```

```bash
node hello.js
```

**Output:**
```
Hello from VS Code! 💻
```

#### 🧰 Helpful VS Code extensions (click the Extensions icon 🧩 and search)

| Extension | Why you'll love it |
|---|---|
| **Live Server** | Right-click an HTML file → *Open with Live Server*. The page refreshes every time you save. |
| **Code Runner** | Click ▶️ at the top right to run a file instantly. |
| **Prettier** | Automatically formats your code so it looks neat. |
| **ESLint** | Underlines mistakes in red, like a spell-checker for code. |

#### 🌐 Running JavaScript inside a web page (browser mode)

Create **two files** in the same folder:

**`index.html`**
```html
<!DOCTYPE html>
<html>
  <head>
    <title>My First JS Page</title>
  </head>
  <body>
    <h1>Hello!</h1>
    <script src="app.js"></script>
  </body>
</html>
```

**`app.js`**
```js
console.log("The page loaded!");
alert("Welcome to my page! 🎉");
```

Open `index.html` with **Live Server** (or double-click it), then press **F12** to see the console.

#### 🐞 Debugging (finding bugs) in VS Code

1. Click in the margin left of a line number to set a **🔴 breakpoint**.
2. Press **F5** and choose **Node.js**.
3. The program pauses at your breakpoint. Hover over variables to see their values!
4. Use **F10** (step over) to move one line at a time.

> 💡 **Tip:** `console.log()` is also a great debugging tool. It's the JavaScript version of using `print()` to check what's happening.

### 🐍➡️🟨 Running code: Python vs JavaScript

| Task | 🐍 Python | 🟨 JavaScript |
|---|---|---|
| File ending | `.py` | `.js` |
| Run in terminal | `python hello.py` | `node hello.js` |
| Interactive mode | `python` (REPL) | `node` (REPL) or browser console |
| Run in browser | ❌ (not directly) | ✅ Yes, natively |

<br/>

---

## 🖨️ 1. print, input, and type

<div style="height:6px;background:linear-gradient(90deg,#FFC300,#FF6A00,#E81A0A);border-radius:4px;"></div>

### 🖨️ Printing output

| 🐍 Python | 🟨 JavaScript |
|---|---|
| `print("Hello")` | `console.log("Hello");` |

```js
console.log("Hello, world!");
console.log("I am", 14, "years old");     // multiple values → separated by spaces
console.log("Score: " + 100);             // + joins text
console.log(`Score: ${100}`);             // template literal (like Python f-strings) ← preferred!
```

**Output:**
```
Hello, world!
I am 14 years old
Score: 100
Score: 100
```

> 📝 **Notice:** JavaScript statements usually end with a **semicolon `;`**. It's optional in many cases, but it's a good habit. Use it consistently!

#### 💬 Comments

| 🐍 Python | 🟨 JavaScript |
|---|---|
| `# one line` | `// one line` |
| `""" many lines """` | `/* many lines */` |

#### 🎨 Other ways to output

```js
console.error("Something went wrong!");   // red error message
console.warn("Careful!");                 // yellow warning
console.table([{ name: "Ava", age: 14 }, { name: "Ben", age: 15 }]);  // pretty table!
```

### ⌨️ Getting input

**This is the biggest difference!** JavaScript doesn't have a single `input()` that works everywhere. It depends on **where** your code runs.

#### 🌐 In the browser (use `prompt`)

| 🐍 Python | 🟨 JavaScript (browser) |
|---|---|
| `name = input("Your name? ")` | `let name = prompt("Your name?");` |

```js
let name = prompt("What is your name?");
alert("Nice to meet you, " + name + "!");
console.log(`Hello, ${name}!`);
```

> ⚠️ `prompt()` **always returns text** (a string), just like Python's `input()`. If the user clicks *Cancel*, you get `null`.

#### 💻 In Node.js / VS Code terminal (use `readline`)

```js
// ask.js
const readline = require("node:readline/promises");

async function main() {
  const rl = readline.createInterface({
    input: process.stdin,
    output: process.stdout,
  });

  const name = await rl.question("What is your name? ");
  const age = Number(await rl.question("How old are you? "));   // convert text → number

  console.log(`Hi ${name}! Next year you will be ${age + 1}.`);
  rl.close();
}

main();
```

```bash
node ask.js
```

> 🧠 **Why `async` and `await`?** Asking the user is a *waiting* job. `await` means "pause here until the user answers." Just copy this pattern for now. You'll understand it fully later!

### 🔎 Checking the type

| 🐍 Python | 🟨 JavaScript |
|---|---|
| `type(5)` → `<class 'int'>` | `typeof 5` → `"number"` |

```js
console.log(typeof 42);          // "number"
console.log(typeof 3.14);        // "number"   (no separate int/float!)
console.log(typeof "hello");     // "string"
console.log(typeof true);        // "boolean"
console.log(typeof undefined);   // "undefined"
console.log(typeof null);        // "object"   ← famous JavaScript bug! 🐛
console.log(typeof [1, 2, 3]);   // "object"   (arrays are objects)
console.log(typeof function(){}); // "function"
```

> 🏅 **Fun fact:** `typeof null` returning `"object"` is a mistake from 1995 that can't be fixed without breaking millions of websites!

### ✏️ Practice 1
1. Print your name, age, and favorite hobby using a **template literal**.
2. Ask the user for their favorite number and print the number **doubled**.
3. Use `typeof` to check the type of 5, "5", `true`, and `[]`.

<br/>

---

## 📦 2. Data Types and Variables

<div style="height:6px;background:linear-gradient(90deg,#FFC300,#FF6A00,#E81A0A);border-radius:4px;"></div>

### 📥 Creating variables

In Python you just write `x = 5`. In JavaScript you must **declare** a variable with `let` or `const`.

| Keyword | Meaning | Python equivalent |
|---|---|---|
| `let` | Variable that **can change** | `x = 5` (then `x = 6`) |
| `const` | Variable that **cannot be reassigned** | (convention: `PI = 3.14`) |
| `var` | ⚠️ Old way, avoid it | — |

```js
let score = 0;
score = score + 10;      // ✅ OK, let can change
score += 5;              // ✅ shortcut, same as Python

const PI = 3.14159;
// PI = 3;               // ❌ ERROR: Assignment to constant variable
```

> 🏅 **Best practice:** Use `const` by default. Switch to `let` only when the value needs to change.

#### 🐪 Naming style

| 🐍 Python | 🟨 JavaScript |
|---|---|
| `snake_case` → `my_high_score` | `camelCase` → `myHighScore` |
| `MyClass` | `MyClass` (same!) |
| `MAX_SIZE` | `MAX_SIZE` (same!) |

Names are **case-sensitive** (`Score` ≠ `score`) and can't start with a number.

### 🧱 The data types

| 🟨 JavaScript type | Example | 🐍 Python equivalent |
|---|---|---|
| **number** | `42`, `3.14`, `-7` | `int` and `float` |
| **string** | `"hi"`, `'hi'`, `` `hi` `` | `str` |
| **boolean** | `true`, `false` (lowercase!) | `bool` (`True`, `False`) |
| **undefined** | `undefined` | *(a variable with no value yet)* |
| **null** | `null` | `None` |
| **bigint** | `123456789012345678901234567890n` | `int` (unlimited size) |
| **object** | `{ name: "Ava" }`, `[1, 2, 3]` | `dict`, `list`, etc. |

```js
let age = 14;                 // number
let price = 9.99;             // number (same type as age!)
let name = "Maya";            // string
let isStudent = true;         // boolean
let nothing = null;           // null (empty on purpose)
let notSet;                   // undefined (nothing assigned yet)

console.log(typeof age, typeof price, typeof name, typeof isStudent);
```

### 🔢 Math with numbers

| Operation | 🐍 Python | 🟨 JavaScript |
|---|---|---|
| Add / subtract / multiply | `+ - *` | `+ - *` |
| Divide | `7 / 2` → `3.5` | `7 / 2` → `3.5` |
| Floor divide | `7 // 2` → `3` | `Math.floor(7 / 2)` → `3` |
| Remainder | `7 % 2` → `1` | `7 % 2` → `1` |
| Power | `2 ** 3` → `8` | `2 ** 3` → `8` |
| Round | `round(3.7)` | `Math.round(3.7)` |
| Absolute | `abs(-5)` | `Math.abs(-5)` |
| Square root | `math.sqrt(16)` | `Math.sqrt(16)` |
| Random 0–1 | `random.random()` | `Math.random()` |
| Increment | `x += 1` | `x += 1` **or** `x++` |

```js
// Random whole number from 1 to 6 (a dice roll! 🎲)
const dice = Math.floor(Math.random() * 6) + 1;
console.log("You rolled:", dice);

// Useful Math tools
console.log(Math.max(3, 9, 4));    // 9
console.log(Math.min(3, 9, 4));    // 3
console.log(Math.PI);              // 3.141592653589793
```

> ⚠️ **Floating-point surprise:** `0.1 + 0.2` gives `0.30000000000000004` in **both** languages. Use `(0.1 + 0.2).toFixed(2)` to display `"0.30"`.

### 🔄 Type conversion

| Goal | 🐍 Python | 🟨 JavaScript |
|---|---|---|
| Text → integer | `int("42")` | `parseInt("42")` or `Number("42")` |
| Text → decimal | `float("3.5")` | `parseFloat("3.5")` or `Number("3.5")` |
| Anything → text | `str(42)` | `String(42)` or `(42).toString()` |
| Anything → boolean | `bool(0)` | `Boolean(0)` |

```js
let text = "25";
let num = Number(text);
console.log(num + 5);          // 30  ✅ (math)
console.log(text + 5);         // "255" 😱 (joined as text!)

console.log(Number("hello"));  // NaN  (Not a Number)
console.log(isNaN(Number("hello")));  // true
```

> 🚨 **The #1 beginner trap:** `"5" + 3` is `"53"` (JavaScript joins them), but `"5" - 3` is `2` (JavaScript does math). Python would show an error instead. **Always convert input with `Number()` first!**

### 🧵 Strings and template literals

```js
const first = "Ada";
const last = "Lovelace";

console.log("Hello, " + first + " " + last);        // old way
console.log(`Hello, ${first} ${last}!`);            // ✅ template literal
console.log(`2 + 3 = ${2 + 3}`);                    // any expression works: "2 + 3 = 5"

// Multi-line text (just like Python's triple quotes)
const poem = `Roses are red,
Violets are blue,
JavaScript is fun,
And so are you!`;
console.log(poem);
```

> 🔑 Template literals use **backticks** `` ` `` (the key left of `1`), **not** regular quotes!

### ✏️ Practice 2
1. Make variables for your name, age, and height. Print a sentence using all three.
2. Convert the text `"100"` to a number and add 50.
3. Roll two dice and print their sum.
4. What does `"10" * "2"` give you? What about `"10" + "2"`? Predict first, then test!

<br/>

---

## 🔀 3. Conditions and Boolean Logic

<div style="height:6px;background:linear-gradient(90deg,#FFC300,#FF6A00,#E81A0A);border-radius:4px;"></div>

### ✅ if / else if / else

| 🐍 Python | 🟨 JavaScript |
|---|---|
| Uses **indentation** and `:` | Uses **curly braces** `{ }` and **parentheses** `( )` |
| `elif` | `else if` |

**🐍 Python**
```python
score = 85
if score >= 90:
    print("A")
elif score >= 80:
    print("B")
else:
    print("Keep trying!")
```

**🟨 JavaScript**
```js
const score = 85;

if (score >= 90) {
  console.log("A");
} else if (score >= 80) {
  console.log("B");
} else {
  console.log("Keep trying!");
}
```

> 📐 Indentation in JavaScript is for **people** (to make it readable), but the **braces `{ }`** are what the computer reads.

### ⚖️ Comparison operators

| Meaning | 🐍 Python | 🟨 JavaScript |
|---|---|---|
| Equal | `==` | **`===`** (strict equal) ✅ |
| Not equal | `!=` | **`!==`** (strict not equal) ✅ |
| Greater / less | `> < >= <=` | `> < >= <=` |

### ⚠️ `==` vs `===` (very important!)

```js
console.log(5 == "5");     // true   😬 (== converts types first)
console.log(5 === "5");    // false  ✅ (=== checks type AND value)
console.log(0 == false);   // true   😬
console.log(0 === false);  // false  ✅
```

> 🏅 **Rule:** Always use **`===`** and **`!==`**. This avoids surprises.

### 🧠 Boolean (logical) operators

| Meaning | 🐍 Python | 🟨 JavaScript |
|---|---|---|
| AND | `and` | `&&` |
| OR | `or` | `\|\|` |
| NOT | `not` | `!` |

```js
const age = 15;
const hasTicket = true;

if (age >= 13 && hasTicket) {
  console.log("Welcome to the show! 🎟️");
}

if (age < 13 || !hasTicket) {
  console.log("Sorry, you can't enter.");
}
```

**Truth table (same in both languages):**

| A | B | A && B | A \|\| B | !A |
|:-:|:-:|:-:|:-:|:-:|
| true | true | ✅ true | ✅ true | ❌ false |
| true | false | ❌ false | ✅ true | ❌ false |
| false | true | ❌ false | ✅ true | ✅ true |
| false | false | ❌ false | ❌ false | ✅ true |

### 🎭 Truthy and Falsy

JavaScript treats some values as `false` inside an `if`. These are the **falsy** values:

| 🚫 Falsy values | Everything else is ✅ truthy |
|---|---|
| `false`, `0`, `""` (empty string), `null`, `undefined`, `NaN` | `"hello"`, `42`, `[]`, `{}`, `"0"` |

```js
if ("") { console.log("never prints"); }
if ("hi") { console.log("prints!"); }

// ⚠️ Difference from Python: an empty array is TRUTHY in JavaScript!
if ([]) { console.log("An empty array is truthy in JS!"); }
// To check for empty, use: if (myArray.length === 0)
```

### ❓ The ternary operator (a one-line if/else)

| 🐍 Python | 🟨 JavaScript |
|---|---|
| `x = "adult" if age >= 18 else "minor"` | `const x = age >= 18 ? "adult" : "minor";` |

```js
const age = 16;
const status = age >= 18 ? "adult" : "minor";
console.log(status);   // "minor"
```

### 🎛️ switch (like a menu)

Python has `match`; JavaScript has `switch`.

```js
const day = 3;
let dayName;

switch (day) {
  case 1:
    dayName = "Monday";
    break;            // ← don't forget break!
  case 2:
    dayName = "Tuesday";
    break;
  case 3:
    dayName = "Wednesday";
    break;
  default:
    dayName = "Some other day";
}
console.log(dayName);   // "Wednesday"
```

### 🛟 Bonus: safe defaults

```js
const nickname = null;
console.log(nickname ?? "Anonymous");   // "Anonymous"  (use default only if null/undefined)

const user = { name: "Ava" };
console.log(user.address?.city);        // undefined (no crash!) — "optional chaining"
```

### 🧪 Example: Grade checker

```js
const score = 92;
const hasExtraCredit = true;

if (score >= 90 || (score >= 85 && hasExtraCredit)) {
  console.log("🌟 Excellent work!");
} else {
  console.log("💪 Keep practicing!");
}
```

### ✏️ Practice 3
1. Ask for a number. Print whether it is **positive**, **negative**, or **zero**.
2. Write a program that checks if a year is a **leap year** (divisible by 4, but not by 100 unless also by 400).
3. Use a `switch` to turn a number 1–7 into a weekday name.
4. Why does `if ([])` run in JavaScript but not in Python? Explain in your own words.

<br/>

---

## 🔁 4. Iterations (Loops)

<div style="height:6px;background:linear-gradient(90deg,#FFC300,#FF6A00,#E81A0A);border-radius:4px;"></div>

### 🔢 The classic `for` loop

Python's `for i in range(5)` becomes a three-part loop in JavaScript:

**🐍 Python**
```python
for i in range(5):
    print(i)
```

**🟨 JavaScript**
```js
for (let i = 0; i < 5; i++) {
  console.log(i);
}
```

**Anatomy of the loop:**

```
for ( let i = 0 ;  i < 5  ;  i++ ) { ... }
      └───┬────┘   └──┬──┘   └─┬─┘
       1. START    2. KEEP      3. AFTER EACH
       (once)      GOING IF…    ROUND
```

| Python | JavaScript |
|---|---|
| `range(5)` → 0,1,2,3,4 | `for (let i = 0; i < 5; i++)` |
| `range(1, 6)` → 1…5 | `for (let i = 1; i <= 5; i++)` |
| `range(0, 10, 2)` → 0,2,4,6,8 | `for (let i = 0; i < 10; i += 2)` |
| `range(5, 0, -1)` → 5…1 | `for (let i = 5; i > 0; i--)` |

```js
// Countdown 🚀
for (let i = 5; i >= 1; i--) {
  console.log(i);
}
console.log("Blast off!");
```

### ⏳ `while` loop (same idea as Python)

```js
let count = 1;
while (count <= 5) {
  console.log("Count is", count);
  count++;
}
```

### 🔂 `do...while` (runs at least once)

Python doesn't have this one!

```js
let guess;
do {
  guess = Number(prompt("Guess my number (1-10):"));
} while (guess !== 7);
console.log("You got it! 🎉");
```

### 🧺 `for...of` (loop over items, just like Python's `for x in list`)

**🐍 Python**
```python
fruits = ["apple", "banana", "cherry"]
for fruit in fruits:
    print(fruit)
```

**🟨 JavaScript**
```js
const fruits = ["apple", "banana", "cherry"];
for (const fruit of fruits) {
  console.log(fruit);
}
```

Need the **index** too? (Python's `enumerate`)

```js
for (const [index, fruit] of fruits.entries()) {
  console.log(index, fruit);
}
// 0 apple
// 1 banana
// 2 cherry
```

Strings work too:
```js
for (const letter of "Code") {
  console.log(letter);   // C, o, d, e
}
```

### 🗝️ `for...in` (loop over object keys)

```js
const student = { name: "Ava", grade: 9, club: "Robotics" };
for (const key in student) {
  console.log(`${key}: ${student[key]}`);
}
```

> ⚠️ **Don't use `for...in` on arrays.** Use `for...of` instead!

### 🛑 `break` and `continue` (same as Python!)

```js
for (let i = 1; i <= 10; i++) {
  if (i === 3) continue;   // skip 3
  if (i === 6) break;      // stop at 6
  console.log(i);          // 1, 2, 4, 5
}
```

### ✨ The modern way: `forEach`

```js
const names = ["Ava", "Ben", "Chen"];
names.forEach((name, i) => {
  console.log(`${i + 1}. ${name}`);
});
```

### 🔲 Nested loops: multiplication table

```js
for (let row = 1; row <= 5; row++) {
  let line = "";
  for (let col = 1; col <= 5; col++) {
    line += String(row * col).padStart(4);
  }
  console.log(line);
}
```

### 🧪 Example: FizzBuzz 🐝

```js
for (let i = 1; i <= 15; i++) {
  if (i % 15 === 0) console.log("FizzBuzz");
  else if (i % 3 === 0) console.log("Fizz");
  else if (i % 5 === 0) console.log("Buzz");
  else console.log(i);
}
```

### ✏️ Practice 4
1. Print all even numbers from 2 to 20.
2. Add up the numbers 1 to 100 using a loop. (Answer: 5050)
3. Print a triangle of stars: `*`, `**`, `***`, `****`.
4. Create a number-guessing game using `while` and `Math.random()`.

<br/>

---

## 🧩 5. Functions

<div style="height:6px;background:linear-gradient(90deg,#FFC300,#FF6A00,#E81A0A);border-radius:4px;"></div>

### 🏗️ Defining a function

**🐍 Python**
```python
def greet(name):
    return f"Hello, {name}!"

print(greet("Ava"))
```

**🟨 JavaScript**
```js
function greet(name) {
  return `Hello, ${name}!`;
}

console.log(greet("Ava"));
```

| Part | 🐍 Python | 🟨 JavaScript |
|---|---|---|
| Keyword | `def` | `function` |
| Block | `:` + indentation | `{ }` |
| Return | `return x` | `return x;` |
| No return value gives | `None` | `undefined` |

### 🏹 Arrow functions (modern, short style)

```js
// Regular function
function square(x) {
  return x * x;
}

// Arrow function: same thing!
const square2 = (x) => {
  return x * x;
};

// Even shorter (one expression → automatic return)
const square3 = x => x * x;

console.log(square3(5));   // 25
```

> 🐍 Arrow functions are similar to Python's `lambda`, but **much more powerful**. They can have many lines!

### 🎁 Default parameters

```js
function greet(name = "friend", punctuation = "!") {
  return `Hello, ${name}${punctuation}`;
}

console.log(greet());              // "Hello, friend!"
console.log(greet("Ava"));         // "Hello, Ava!"
console.log(greet("Ben", "?"));    // "Hello, Ben?"
```

### 🧳 Any number of arguments (rest parameters)

Python's `*args` becomes `...args`.

```js
function sum(...numbers) {
  let total = 0;
  for (const n of numbers) total += n;
  return total;
}
console.log(sum(1, 2, 3, 4));   // 10
```

### 🎒 Returning many values

Python returns a tuple; JavaScript returns an array or object.

```js
function minMax(arr) {
  return [Math.min(...arr), Math.max(...arr)];
}

const [lowest, highest] = minMax([4, 9, 1, 7]);
console.log(lowest, highest);   // 1 9
```

### 🌍 Scope: where variables live

```js
const globalName = "Everyone can see me";

function demo() {
  const localName = "Only inside demo()";
  console.log(globalName);   // ✅ works
  console.log(localName);    // ✅ works
}

demo();
// console.log(localName);   // ❌ ERROR: not defined here
```

`let` and `const` are **block-scoped**. They only live inside the nearest `{ }`.

```js
if (true) {
  let secret = 42;
}
// console.log(secret);   // ❌ ERROR
```

### 📞 Functions are values (callbacks)

In JavaScript you can pass functions into other functions!

```js
function repeat(times, action) {
  for (let i = 0; i < times; i++) {
    action(i);
  }
}

repeat(3, (n) => console.log(`Round ${n + 1}`));
// Round 1
// Round 2
// Round 3
```

```js
// A classic: do something after a delay
setTimeout(() => console.log("3 seconds later..."), 3000);
```

### 🧪 Example: Temperature converter

```js
const celsiusToF = (c) => (c * 9) / 5 + 32;

console.log(celsiusToF(0));     // 32
console.log(celsiusToF(100));   // 212
```

### ✏️ Practice 5
1. Write `isEven(n)` that returns `true` or `false`.
2. Write `average(...nums)` that returns the average of any number of values.
3. Rewrite `isEven` as an arrow function in one line.
4. Write `countVowels(text)` that returns how many vowels are in a string.

<br/>

---

## 📁 6. File I/O

<div style="height:6px;background:linear-gradient(90deg,#FFC300,#FF6A00,#E81A0A);border-radius:4px;"></div>

> 🧭 **Important:** Reading and writing files on your computer works in **Node.js (VS Code)**. Web pages in the browser are *not allowed* to touch your files freely (for security), so there we use **file pickers, downloads, and `localStorage`**.

### 💻 A. Files in Node.js

Python uses `open()`. Node.js uses the built-in **`fs`** (file system) module.

| Task | 🐍 Python | 🟨 JavaScript (Node) |
|---|---|---|
| Load the tools | *(built in)* | `const fs = require("node:fs");` |
| Write (replace) | `open(f, "w").write(text)` | `fs.writeFileSync(f, text)` |
| Append | `open(f, "a").write(text)` | `fs.appendFileSync(f, text)` |
| Read all | `open(f).read()` | `fs.readFileSync(f, "utf8")` |
| File exists? | `os.path.exists(f)` | `fs.existsSync(f)` |
| Delete | `os.remove(f)` | `fs.unlinkSync(f)` |

#### ✍️ Writing and reading

```js
const fs = require("node:fs");

// 1. Write (creates the file or REPLACES it)
fs.writeFileSync("notes.txt", "Line 1: Hello\n");

// 2. Add more
fs.appendFileSync("notes.txt", "Line 2: JavaScript is fun\n");
fs.appendFileSync("notes.txt", "Line 3: Learn and Help!\n");

// 3. Read everything
const text = fs.readFileSync("notes.txt", "utf8");
console.log(text);

// 4. Process line by line
const lines = text.trim().split("\n");
for (const line of lines) {
  console.log("➡️", line);
}
```

> 📍 The file is created in the **folder where you run `node`**. Check your VS Code Explorer panel to see `notes.txt` appear!

#### 🛡️ Handle errors with try / catch (like Python's try / except)

**🐍 Python**
```python
try:
    with open("missing.txt") as f:
        print(f.read())
except FileNotFoundError:
    print("File not found!")
```

**🟨 JavaScript**
```js
const fs = require("node:fs");

try {
  const data = fs.readFileSync("missing.txt", "utf8");
  console.log(data);
} catch (error) {
  console.log("Oops! Could not read the file:", error.message);
}
```

#### 📊 Example: Read a CSV file

Create `students.csv`:
```
name,grade,score
Ava,9,95
Ben,10,82
Chen,9,78
```

```js
const fs = require("node:fs");

const rows = fs.readFileSync("students.csv", "utf8").trim().split("\n");
const headers = rows[0].split(",");          // ["name", "grade", "score"]

const students = [];
for (let i = 1; i < rows.length; i++) {
  const values = rows[i].split(",");
  students.push({
    name: values[0],
    grade: Number(values[1]),
    score: Number(values[2]),
  });
}

console.table(students);

const avg = students.reduce((sum, s) => sum + s.score, 0) / students.length;
console.log(`Class average: ${avg.toFixed(1)}`);
```

#### 🧾 Saving data as JSON (super useful!)

```js
const fs = require("node:fs");

const player = { name: "Ava", level: 5, items: ["sword", "shield"] };

// Save object → file
fs.writeFileSync("player.json", JSON.stringify(player, null, 2));

// Load file → object
const loaded = JSON.parse(fs.readFileSync("player.json", "utf8"));
console.log(loaded.name, loaded.items);
```

#### 🌊 Reading a big file line by line

```js
const fs = require("node:fs");
const readline = require("node:readline");

async function readLines() {
  const rl = readline.createInterface({
    input: fs.createReadStream("notes.txt"),
  });

  for await (const line of rl) {
    console.log("Line:", line);
  }
}

readLines();
```

### 🌐 B. Files in the Browser

#### 📤 Reading a file the user picks

```html
<input type="file" id="picker" accept=".txt" />
<pre id="output"></pre>

<script>
  document.getElementById("picker").addEventListener("change", async (event) => {
    const file = event.target.files[0];
    const text = await file.text();
    document.getElementById("output").textContent = text;
  });
</script>
```

#### 📥 Saving (downloading) a file

```js
function downloadText(filename, text) {
  const blob = new Blob([text], { type: "text/plain" });
  const link = document.createElement("a");
  link.href = URL.createObjectURL(blob);
  link.download = filename;
  link.click();
}

downloadText("hello.txt", "Hello from the browser!");
```

#### 💾 `localStorage`: a tiny notebook inside the browser

```js
localStorage.setItem("highScore", "250");
const saved = localStorage.getItem("highScore");
console.log(Number(saved));        // 250

// Save objects with JSON
localStorage.setItem("player", JSON.stringify({ name: "Ava", level: 3 }));
const player = JSON.parse(localStorage.getItem("player"));
```

### ✏️ Practice 6
1. Write a program that saves your 3 favorite foods to `foods.txt`, then reads and prints them.
2. Make a **visit counter**: read a number from `count.txt`, add 1, save it back, and print it.
3. Read `students.csv` and print only students with a score above 80.

<br/>

---

## 📋 7. Lists → Arrays

<div style="height:6px;background:linear-gradient(90deg,#FFC300,#FF6A00,#E81A0A);border-radius:4px;"></div>

A Python **list** is a JavaScript **array**.

```js
const fruits = ["apple", "banana", "cherry"];
const mixed = [1, "two", true, null];   // can mix types, like Python
const empty = [];
```

### 🔑 Access and change

| Task | 🐍 Python | 🟨 JavaScript |
|---|---|---|
| First item | `fruits[0]` | `fruits[0]` |
| Last item | `fruits[-1]` | `fruits.at(-1)` ⚠️ (`fruits[-1]` is `undefined`!) |
| Length | `len(fruits)` | `fruits.length` (no parentheses!) |
| Change item | `fruits[1] = "kiwi"` | `fruits[1] = "kiwi";` |

> 💡 `const` arrays can still be **changed inside** (add/remove items). `const` only prevents re-assigning the whole variable.

### 🛠️ Adding & removing

| Task | 🐍 Python | 🟨 JavaScript |
|---|---|---|
| Add to end | `a.append(x)` | `a.push(x)` |
| Add to front | `a.insert(0, x)` | `a.unshift(x)` |
| Remove from end | `a.pop()` | `a.pop()` |
| Remove from front | `a.pop(0)` | `a.shift()` |
| Remove at position | `del a[i]` | `a.splice(i, 1)` |
| Insert at position | `a.insert(i, x)` | `a.splice(i, 0, x)` |
| Join two lists | `a + b` | `[...a, ...b]` or `a.concat(b)` |

```js
const pets = ["cat", "dog"];
pets.push("hamster");           // ["cat", "dog", "hamster"]
pets.unshift("fish");           // ["fish", "cat", "dog", "hamster"]
pets.pop();                     // removes "hamster"
pets.shift();                   // removes "fish"
pets.splice(1, 0, "parrot");    // insert at index 1 → ["cat", "parrot", "dog"]
console.log(pets);
```

### 🔍 Searching

| Task | 🐍 Python | 🟨 JavaScript |
|---|---|---|
| Is it in the list? | `x in a` | `a.includes(x)` |
| Where is it? | `a.index(x)` | `a.indexOf(x)` (returns `-1` if missing) |
| Find first match | *(loop)* | `a.find(x => x > 5)` |

### ✂️ Slicing

| 🐍 Python | 🟨 JavaScript |
|---|---|
| `a[1:3]` | `a.slice(1, 3)` |
| `a[2:]` | `a.slice(2)` |
| `a[:-1]` | `a.slice(0, -1)` |
| `a[::-1]` (reverse copy) | `[...a].reverse()` |

```js
const letters = ["a", "b", "c", "d", "e"];
console.log(letters.slice(1, 4));    // ["b", "c", "d"]
console.log(letters.slice(-2));      // ["d", "e"]
```

### 🔃 Sorting

```js
const nums = [10, 9, 1, 100, 25];

console.log(nums.sort());                 // [1, 10, 100, 25, 9]  😱 sorts as TEXT!
console.log(nums.sort((a, b) => a - b));  // [1, 9, 10, 25, 100]  ✅ numeric ascending
console.log(nums.sort((a, b) => b - a));  // [100, 25, 10, 9, 1]  ✅ descending

const words = ["pear", "apple", "fig"];
words.sort();                             // ["apple", "fig", "pear"] ✅ fine for text
```

> ⚠️ `.sort()` and `.reverse()` **change the original array** (unlike Python's `sorted()`). To keep the original, copy first: `[...nums].sort((a, b) => a - b)`.

### 🪄 The power tools: `map`, `filter`, `reduce`

These replace many Python list comprehensions.

**🐍 Python**
```python
nums = [1, 2, 3, 4, 5]
squares = [n * n for n in nums]
evens = [n for n in nums if n % 2 == 0]
total = sum(nums)
```

**🟨 JavaScript**
```js
const nums = [1, 2, 3, 4, 5];

const squares = nums.map(n => n * n);              // [1, 4, 9, 16, 25]
const evens   = nums.filter(n => n % 2 === 0);     // [2, 4]
const total   = nums.reduce((sum, n) => sum + n, 0);  // 15
```

| Method | Job | Picture it as |
|---|---|---|
| `map` | Transform **every** item | 🏭 A machine that changes each item |
| `filter` | Keep only items that **pass a test** | 🚪 A bouncer at the door |
| `reduce` | Combine everything into **one value** | 🥤 A blender |

More helpers:
```js
console.log(nums.some(n => n > 4));    // true  (is at least one > 4?)
console.log(nums.every(n => n > 0));   // true  (are all > 0?)
console.log(nums.join(" - "));         // "1 - 2 - 3 - 4 - 5"
```

### 🧩 Spread & destructuring

```js
const [first, second, ...rest] = [10, 20, 30, 40];
console.log(first, second, rest);   // 10 20 [30, 40]

// Swap two variables (no temp needed!)
let a = 1, b = 2;
[a, b] = [b, a];
console.log(a, b);   // 2 1
```

### 🧮 2D arrays (grids)

```js
const grid = [
  [1, 2, 3],
  [4, 5, 6],
  [7, 8, 9],
];
console.log(grid[1][2]);   // 6  (row 1, column 2)

for (const row of grid) {
  console.log(row.join(" "));
}
```

### 🧪 Example: Grade statistics

```js
const scores = [88, 92, 75, 64, 99, 81];

const highest = Math.max(...scores);
const average = scores.reduce((s, n) => s + n, 0) / scores.length;
const passing = scores.filter(s => s >= 70);

console.log(`Highest: ${highest}`);
console.log(`Average: ${average.toFixed(1)}`);
console.log(`Passing: ${passing.length} of ${scores.length}`);
```

### ✏️ Practice 7
1. Create an array of 5 numbers; print the **sum**, **largest**, and **smallest**.
2. Use `map` to turn `["ava", "ben"]` into `["AVA", "BEN"]`.
3. Use `filter` to keep only words longer than 3 letters.
4. Remove duplicates from `[1, 2, 2, 3, 3, 3]` (hint: wait for the Sets section!).

<br/>

---

## 🔤 8. String Processing

<div style="height:6px;background:linear-gradient(90deg,#FFC300,#FF6A00,#E81A0A);border-radius:4px;"></div>

### 🔑 The basics

| Task | 🐍 Python | 🟨 JavaScript |
|---|---|---|
| Length | `len(s)` | `s.length` |
| Letter at position | `s[0]` | `s[0]` or `s.charAt(0)` |
| Last letter | `s[-1]` | `s.at(-1)` |
| Join | `a + b` | `a + b` or `` `${a}${b}` `` |
| Repeat | `"ha" * 3` | `"ha".repeat(3)` |

```js
const word = "JavaScript";
console.log(word.length);    // 10
console.log(word[0]);        // "J"
console.log(word.at(-1));    // "t"
```

> 🔒 **Strings are immutable** in both languages. `word[0] = "j"` does nothing. You must make a *new* string.

### 🧰 Handy string methods

| Task | 🐍 Python | 🟨 JavaScript |
|---|---|---|
| UPPERCASE | `s.upper()` | `s.toUpperCase()` |
| lowercase | `s.lower()` | `s.toLowerCase()` |
| Trim spaces | `s.strip()` | `s.trim()` |
| Contains | `"a" in s` | `s.includes("a")` |
| Starts with | `s.startswith("a")` | `s.startsWith("a")` |
| Ends with | `s.endswith("a")` | `s.endsWith("a")` |
| Find position | `s.find("a")` | `s.indexOf("a")` (`-1` if missing) |
| Replace first | `s.replace("a", "b", 1)` | `s.replace("a", "b")` |
| Replace all | `s.replace("a", "b")` | `s.replaceAll("a", "b")` |
| Slice | `s[2:5]` | `s.slice(2, 5)` |
| Split to list | `s.split(" ")` | `s.split(" ")` |
| Join list | `" ".join(lst)` | `lst.join(" ")` ⚠️ *reversed order!* |
| Pad left | `s.zfill(5)` | `s.padStart(5, "0")` |
| Count letters | `s.count("a")` | *(use a loop or `split("a").length - 1`)* |

```js
const message = "  Hello, World!  ";

console.log(message.trim());                     // "Hello, World!"
console.log(message.toUpperCase());              // "  HELLO, WORLD!  "
console.log(message.includes("World"));          // true
console.log(message.replaceAll("l", "L"));       // "  HeLLo, WorLd!  "
console.log("2024-05-17".split("-"));            // ["2024", "05", "17"]
console.log(["a", "b", "c"].join("+"));          // "a+b+c"
console.log("7".padStart(3, "0"));               // "007"
```

### ✂️ Slice vs substring

```js
const s = "programming";
console.log(s.slice(0, 7));     // "program"
console.log(s.slice(-4));       // "ming"
console.log(s.slice(3));        // "gramming"
```

> 🏅 Use **`slice`**. It works like Python slicing (including negative numbers).

### 🔁 Looping over a string

```js
const text = "hello";
for (const ch of text) {
  console.log(ch.toUpperCase());
}
```

### 🪞 Reverse a string

JavaScript strings have no `.reverse()`, so go **string → array → string**:

```js
const reversed = "hello".split("").reverse().join("");
console.log(reversed);   // "olleh"
```

### 🧪 Example 1: Palindrome checker

```js
function isPalindrome(text) {
  const clean = text.toLowerCase().replaceAll(" ", "");
  return clean === clean.split("").reverse().join("");
}

console.log(isPalindrome("race car"));   // true
console.log(isPalindrome("hello"));      // false
```

### 🧪 Example 2: Count words & letters

```js
const sentence = "the quick brown fox jumps over the lazy dog";

const words = sentence.split(" ");
console.log("Words:", words.length);

let vowels = 0;
for (const ch of sentence) {
  if ("aeiou".includes(ch)) vowels++;
}
console.log("Vowels:", vowels);
```

### 🧪 Example 3: Capitalize every word

```js
const title = "learn and help code for good"
  .split(" ")
  .map(w => w[0].toUpperCase() + w.slice(1))
  .join(" ");

console.log(title);   // "Learn And Help Code For Good"
```

### 🔮 Bonus: Regular expressions (pattern matching)

```js
const phone = "Call me at 555-1234 or 555-9876";

console.log(/\d{3}-\d{4}/.test(phone));         // true
console.log(phone.match(/\d{3}-\d{4}/g));       // ["555-1234", "555-9876"]
console.log(phone.replace(/\d/g, "#"));         // "Call me at ###-#### or ###-####"
```

### 🔐 Example 4: Simple Caesar cipher

```js
function caesar(text, shift) {
  let result = "";
  for (const ch of text.toLowerCase()) {
    if (ch >= "a" && ch <= "z") {
      const code = ((ch.charCodeAt(0) - 97 + shift) % 26) + 97;
      result += String.fromCharCode(code);
    } else {
      result += ch;
    }
  }
  return result;
}

console.log(caesar("hello", 3));   // "khoor"
```

### ✏️ Practice 8
1. Count how many times the letter `"a"` appears in a sentence.
2. Write a function that turns `"hello world"` into `"Hello World"`.
3. Check if a password is strong: ≥ 8 characters and contains a number.
4. Write an acronym maker: `"Learn And Help"` → `"LAH"`.

<br/>

---

## 🎯 9. Sets

<div style="height:6px;background:linear-gradient(90deg,#FFC300,#FF6A00,#E81A0A);border-radius:4px;"></div>

A **Set** stores **unique** values (no duplicates), exactly like Python's `set`.

| Task | 🐍 Python | 🟨 JavaScript |
|---|---|---|
| Create empty | `set()` | `new Set()` |
| From list | `set([1, 2, 2, 3])` | `new Set([1, 2, 2, 3])` |
| Add | `s.add(4)` | `s.add(4)` |
| Remove | `s.remove(4)` / `discard` | `s.delete(4)` |
| Contains | `4 in s` | `s.has(4)` |
| Size | `len(s)` | `s.size` (no parentheses!) |
| Clear | `s.clear()` | `s.clear()` |

```js
const colors = new Set(["red", "blue", "red", "green", "blue"]);
console.log(colors);          // Set(3) { "red", "blue", "green" }
console.log(colors.size);     // 3

colors.add("yellow");
colors.add("red");            // ignored (already there)
console.log(colors.has("blue"));   // true
colors.delete("green");
```

### 🔁 Looping through a set

```js
for (const color of colors) {
  console.log(color);
}
```

### 🧹 Removing duplicates from an array (the #1 use!)

```js
const nums = [1, 2, 2, 3, 3, 3, 4];
const unique = [...new Set(nums)];
console.log(unique);   // [1, 2, 3, 4]
```

### 🔵🟡 Set math: union, intersection, difference

| Operation | Meaning | 🐍 Python | 🟨 JavaScript (works everywhere) |
|---|---|---|---|
| **Union** | Everything in A or B | `a \| b` | `new Set([...a, ...b])` |
| **Intersection** | Only in both | `a & b` | `new Set([...a].filter(x => b.has(x)))` |
| **Difference** | In A but not B | `a - b` | `new Set([...a].filter(x => !b.has(x)))` |

```js
const mathClub = new Set(["Ava", "Ben", "Chen"]);
const artClub  = new Set(["Ben", "Dana", "Chen"]);

const either = new Set([...mathClub, ...artClub]);
const both   = new Set([...mathClub].filter(n => artClub.has(n)));
const onlyMath = new Set([...mathClub].filter(n => !artClub.has(n)));

console.log("Either club:", [...either]);     // Ava, Ben, Chen, Dana
console.log("Both clubs:", [...both]);        // Ben, Chen
console.log("Only math:", [...onlyMath]);     // Ava
```

> 🆕 Newer versions of JavaScript (Node 22+ and the latest browsers) also include built-in `a.union(b)`, `a.intersection(b)`, and `a.difference(b)`. If it works on your computer, great! The version above works **everywhere**.

### 🧪 Example: Find unique words

```js
const text = "the cat and the hat and the bat";
const uniqueWords = new Set(text.split(" "));
console.log(`${uniqueWords.size} unique words:`, [...uniqueWords]);
// 5 unique words: [ 'the', 'cat', 'and', 'hat', 'bat' ]
```

### ✏️ Practice 9
1. Remove duplicates from `[5, 3, 5, 1, 3, 9]`.
2. Given two friend lists, find the **mutual friends**.
3. Count how many **different letters** are in the word `"mississippi"`.

<br/>

---

## 📖 10. Dictionaries → Objects and Maps

<div style="height:6px;background:linear-gradient(90deg,#FFC300,#FF6A00,#E81A0A);border-radius:4px;"></div>

A Python **dict** is a JavaScript **object** (or a **Map**).

### 🧱 Objects: key/value pairs

**🐍 Python**
```python
student = {"name": "Ava", "grade": 9, "club": "Robotics"}
print(student["name"])
```

**🟨 JavaScript**
```js
const student = { name: "Ava", grade: 9, club: "Robotics" };
console.log(student.name);       // dot notation (most common)
console.log(student["name"]);    // bracket notation (works with variables)
```

> 📝 In JavaScript, keys don't need quotes (unless they contain spaces or dashes).

| Task | 🐍 Python | 🟨 JavaScript |
|---|---|---|
| Get value | `d["key"]` | `d.key` or `d["key"]` |
| Set / add | `d["key"] = 5` | `d.key = 5` |
| Delete | `del d["key"]` | `delete d.key` |
| Key exists? | `"key" in d` | `"key" in d` or `d.hasOwnProperty("key")` |
| Get all keys | `d.keys()` | `Object.keys(d)` |
| Get all values | `d.values()` | `Object.values(d)` |
| Get all pairs | `d.items()` | `Object.entries(d)` |
| Size | `len(d)` | `Object.keys(d).length` |
| Safe get with default | `d.get("k", 0)` | `d.k ?? 0` |

```js
const pet = { name: "Milo", type: "dog", age: 3 };

pet.age = 4;               // change
pet.color = "brown";       // add
delete pet.type;           // remove

console.log("name" in pet);          // true
console.log(Object.keys(pet));       // ["name", "age", "color"]
console.log(Object.values(pet));     // ["Milo", 4, "brown"]
```

### 🔁 Looping

```js
for (const [key, value] of Object.entries(pet)) {
  console.log(`${key} → ${value}`);
}
```

### 🪆 Nested data

```js
const school = {
  name: "Lincoln High",
  students: [
    { name: "Ava", scores: [90, 85] },
    { name: "Ben", scores: [70, 95] },
  ],
};

console.log(school.students[1].name);        // "Ben"
console.log(school.students[0].scores[1]);   // 85
```

### 🧮 Example: Word counter

**🐍 Python**
```python
counts = {}
for word in words:
    counts[word] = counts.get(word, 0) + 1
```

**🟨 JavaScript**
```js
const sentence = "the cat and the hat and the bat";
const counts = {};

for (const word of sentence.split(" ")) {
  counts[word] = (counts[word] ?? 0) + 1;
}

console.log(counts);
// { the: 3, cat: 1, and: 2, hat: 1, bat: 1 }
```

### 🗺️ `Map`: the "true dictionary"

A `Map` is closer to a Python dict: any type of key, easy size, remembers order.

```js
const ages = new Map();
ages.set("Ava", 14);
ages.set("Ben", 15);

console.log(ages.get("Ava"));    // 14
console.log(ages.has("Ben"));    // true
console.log(ages.size);          // 2
ages.delete("Ben");

for (const [name, age] of ages) {
  console.log(name, age);
}
```

| Use an **Object** when… | Use a **Map** when… |
|---|---|
| Describing one thing (a student, a game player) | Collecting lots of key/value pairs that change |
| Keys are known ahead of time | Keys are unknown or not text (numbers, objects) |
| Working with JSON | You need `.size` and easy looping |

### 🧾 JSON: the universal data format 🌍

Python's `json` module → JavaScript's built-in **`JSON`**. (JSON is actually *born* from JavaScript objects!)

```js
const data = { name: "Ava", skills: ["Python", "JS"], age: 14 };

const text = JSON.stringify(data);          // object → text
console.log(text);                          // '{"name":"Ava","skills":["Python","JS"],"age":14}'

const back = JSON.parse(text);              // text → object
console.log(back.skills[1]);                // "JS"

console.log(JSON.stringify(data, null, 2)); // pretty print with 2-space indent
```

### 🧪 Example: Phone book

```js
const phoneBook = {
  Ava: "555-0101",
  Ben: "555-0202",
};

phoneBook["Chen"] = "555-0303";

const lookup = (name) => phoneBook[name] ?? "Not found";
console.log(lookup("Ben"));      // "555-0202"
console.log(lookup("Zed"));      // "Not found"
```

### ✏️ Practice 10
1. Build an object for yourself with name, age, and hobbies (an array).
2. Count how often each letter appears in `"banana"`.
3. Create an inventory object (`{ apples: 5, pears: 2 }`), then add, remove, and print totals.
4. Save an object to `data.json` and load it back (use Section 6!).

<br/>

---

## 🏗️ 11. Objects and Classes

<div style="height:6px;background:linear-gradient(90deg,#FFC300,#FF6A00,#E81A0A);border-radius:4px;"></div>

### 🧰 Objects with methods

Objects can hold **actions** (functions) as well as data.

```js
const dog = {
  name: "Milo",
  age: 3,
  bark() {
    console.log(`${this.name} says: Woof! 🐶`);
  },
  birthday() {
    this.age++;
  },
};

dog.bark();          // Milo says: Woof! 🐶
dog.birthday();
console.log(dog.age);   // 4
```

> 🔑 **`this`** means "the object I belong to". It's the JavaScript version of Python's **`self`**.

### 🏭 Classes: blueprints for objects

**🐍 Python**
```python
class Student:
    def __init__(self, name, grade):
        self.name = name
        self.grade = grade

    def introduce(self):
        return f"Hi, I'm {self.name} from grade {self.grade}"

ava = Student("Ava", 9)
print(ava.introduce())
```

**🟨 JavaScript**
```js
class Student {
  constructor(name, grade) {
    this.name = name;
    this.grade = grade;
  }

  introduce() {
    return `Hi, I'm ${this.name} from grade ${this.grade}`;
  }
}

const ava = new Student("Ava", 9);
console.log(ava.introduce());
```

### 🔄 Python ↔ JavaScript class translation

| Idea | 🐍 Python | 🟨 JavaScript |
|---|---|---|
| Create class | `class Student:` | `class Student {` |
| Constructor | `def __init__(self, ...)` | `constructor(...)` |
| Current object | `self` | `this` |
| Method | `def speak(self):` | `speak() { }` *(no `function`, no `self` parameter)* |
| Create object | `Student("Ava", 9)` | `new Student("Ava", 9)` ← **`new` required!** |
| Inheritance | `class Dog(Animal):` | `class Dog extends Animal {` |
| Call parent | `super().__init__()` | `super(...)` |
| String form | `__str__` | `toString()` |
| Class-level method | `@staticmethod` | `static` |
| Private | `_name` (convention) | `#name` (truly private!) |

### 🧬 Inheritance

```js
class Animal {
  constructor(name) {
    this.name = name;
  }

  speak() {
    console.log(`${this.name} makes a sound.`);
  }
}

class Dog extends Animal {
  constructor(name, breed) {
    super(name);              // call the parent constructor FIRST
    this.breed = breed;
  }

  speak() {                   // override the parent's method
    console.log(`${this.name} the ${this.breed} says Woof! 🐕`);
  }

  fetch() {
    console.log(`${this.name} runs to get the ball!`);
  }
}

const generic = new Animal("Creature");
const milo = new Dog("Milo", "Labrador");

generic.speak();   // Creature makes a sound.
milo.speak();      // Milo the Labrador says Woof! 🐕
milo.fetch();
console.log(milo instanceof Animal);   // true
```

### 🔐 Private fields, getters, and static members

```js
class BankAccount {
  #balance = 0;                       // 🔒 private: only usable inside the class
  static bankName = "Learn & Help Bank";

  constructor(owner, startingAmount = 0) {
    this.owner = owner;
    this.#balance = startingAmount;
  }

  deposit(amount) {
    if (amount <= 0) {
      console.log("Deposit must be positive!");
      return;
    }
    this.#balance += amount;
  }

  withdraw(amount) {
    if (amount > this.#balance) {
      console.log("Not enough money! 💸");
      return;
    }
    this.#balance -= amount;
  }

  get balance() {                     // 👀 read it like a property: acct.balance
    return this.#balance;
  }

  toString() {
    return `${this.owner}: $${this.#balance}`;
  }

  static compare(a, b) {              // called on the class itself
    return a.balance - b.balance;
  }
}

const acct = new BankAccount("Ava", 100);
acct.deposit(50);
acct.withdraw(30);
console.log(acct.balance);                 // 120
console.log(`${acct}`);                    // "Ava: $120"
console.log(BankAccount.bankName);         // "Learn & Help Bank"
// console.log(acct.#balance);             // ❌ ERROR (private!)
```

### 🧩 Arrays of objects (very common!)

```js
class Book {
  constructor(title, author, pages) {
    this.title = title;
    this.author = author;
    this.pages = pages;
  }
}

const library = [
  new Book("Charlotte's Web", "E.B. White", 192),
  new Book("The Hobbit", "J.R.R. Tolkien", 310),
  new Book("Holes", "Louis Sachar", 233),
];

const longBooks = library.filter(b => b.pages > 200);
const titles = library.map(b => b.title);

console.log(titles);
console.log(longBooks.length, "long books");
```

### 🧪 Example: A tiny game character

```js
class Player {
  constructor(name) {
    this.name = name;
    this.health = 100;
    this.inventory = [];
  }

  pickUp(item) {
    this.inventory.push(item);
    console.log(`${this.name} picked up a ${item}! 🎒`);
  }

  takeDamage(amount) {
    this.health = Math.max(0, this.health - amount);
    console.log(`${this.name} has ${this.health} health left.`);
  }

  get isAlive() {
    return this.health > 0;
  }
}

const hero = new Player("Nova");
hero.pickUp("sword");
hero.takeDamage(40);
console.log("Alive?", hero.isAlive);
```

### ⚠️ The `this` gotcha

```js
class Counter {
  constructor() { this.count = 0; }
  increment() { this.count++; }
}

const c = new Counter();
c.increment();                 // ✅ works

const loose = c.increment;
// loose();                    // ❌ ERROR: `this` is lost when separated from the object!
```

> 🛟 If you pass a method somewhere as a callback, wrap it in an arrow function: `() => c.increment()`.

### ✏️ Practice 11
1. Create a `Rectangle` class with `width`, `height`, and an `area()` method.
2. Create a `Circle` class with a `radius` and `area()`. Put both shapes in an array and print each area.
3. Build a `Pet` class and a `Cat` subclass that overrides `speak()`.
4. Make a `ToDoList` class with `add(task)`, `remove(task)`, and `show()` methods.

<br/>

---

## 🧾 12. Cheat Sheet & Common Gotchas

<div style="height:6px;background:linear-gradient(90deg,#FFC300,#FF6A00,#E81A0A);border-radius:4px;"></div>

### ⚡ Quick Reference: Python → JavaScript

| Concept | 🐍 Python | 🟨 JavaScript |
|---|---|---|
| Print | `print(x)` | `console.log(x)` |
| Input | `input("?")` | `prompt("?")` (browser) / `readline` (Node) |
| Type | `type(x)` | `typeof x` |
| Variable | `x = 5` | `let x = 5;` / `const x = 5;` |
| Comment | `# note` | `// note` |
| f-string | `f"Hi {name}"` | `` `Hi ${name}` `` |
| And / Or / Not | `and or not` | `&& \|\| !` |
| Equals | `==` | `===` |
| None | `None` | `null` / `undefined` |
| True / False | `True False` | `true false` |
| elif | `elif` | `else if` |
| For range | `for i in range(5):` | `for (let i = 0; i < 5; i++) {}` |
| For each | `for x in lst:` | `for (const x of lst) {}` |
| Function | `def f(x):` | `function f(x) {}` / `const f = x => ...` |
| Lambda | `lambda x: x*2` | `x => x * 2` |
| List | `[1, 2, 3]` | `[1, 2, 3]` |
| Length | `len(x)` | `x.length` / `x.size` (Set, Map) |
| Append | `lst.append(x)` | `lst.push(x)` |
| Dict | `{"a": 1}` | `{ a: 1 }` |
| Dict keys | `d.keys()` | `Object.keys(d)` |
| Set | `{1, 2}` | `new Set([1, 2])` |
| Class | `class A:` | `class A {}` |
| Constructor | `__init__(self)` | `constructor()` |
| self | `self` | `this` |
| try / except | `try: ... except:` | `try {} catch (e) {}` |
| Import | `import math` | `require("...")` / `import ... from "..."` |

### 🚨 Top 10 Gotchas for Python Programmers

| # | 🐛 Gotcha | ✅ What to remember |
|:-:|---|---|
| 1 | `"5" + 3` → `"53"` | JavaScript joins instead of crashing. Convert with `Number()`. |
| 2 | `==` converts types | Use **`===`** always. |
| 3 | `[]` is truthy | Check `arr.length === 0` instead. |
| 4 | `[10, 9, 1].sort()` sorts as text | Use `.sort((a, b) => a - b)`. |
| 5 | `arr[-1]` is `undefined` | Use `arr.at(-1)`. |
| 6 | Missing `new` with classes | `new Student(...)`, always! |
| 7 | `this` can get lost | Use arrow functions for callbacks. |
| 8 | `typeof null` is `"object"` | Check with `x === null`. |
| 9 | `0.1 + 0.2 !== 0.3` | Use `.toFixed()` or compare with a small margin. |
| 10 | Forgetting `{ }` or `( )` | Read the error message; it points to the line! |

### 🩺 Reading error messages

| Error | Usually means |
|---|---|
| `SyntaxError: Unexpected token` | A missing or extra `)` `}` `,` or quote |
| `ReferenceError: x is not defined` | Typo in a variable name, or used outside its scope |
| `TypeError: x is not a function` | Calling something that isn't a function (check spelling) |
| `TypeError: Cannot read properties of undefined` | You tried `x.something` but `x` has no value yet |
| `TypeError: Assignment to constant variable` | You tried to change a `const` |

<br/>

---

## 🏆 13. Challenge Projects

<div style="height:6px;background:linear-gradient(90deg,#FFC300,#FF6A00,#E81A0A);border-radius:4px;"></div>

Pick one (or more!) and build it. ⭐ = easier, ⭐⭐⭐ = more challenging.

| ⭐ Level | 🎯 Project | 🧠 Skills used |
|:-:|---|---|
| ⭐ | **Number Guessing Game** | input, loops, conditions, `Math.random()` |
| ⭐ | **Tip Calculator** | input, math, functions |
| ⭐ | **Dice Roller** with stats | loops, arrays, objects |
| ⭐⭐ | **Quiz App** (questions stored in an array of objects) | arrays, objects, loops, functions |
| ⭐⭐ | **Word Frequency Counter** (read a `.txt` file) | file I/O, strings, objects |
| ⭐⭐ | **Contact Book** saved to `contacts.json` | objects, JSON, file I/O |
| ⭐⭐ | **Password Strength Checker** | strings, conditions, regex |
| ⭐⭐⭐ | **Library Manager** with `Book` and `Library` classes | classes, arrays, `filter`/`map` |
| ⭐⭐⭐ | **Text Adventure Game** | classes, objects, loops, input |
| ⭐⭐⭐ | **Grade Report from CSV**: average, highest, lowest per student | file I/O, arrays, `reduce`, sets |

### 🌟 Code For Good Mini-Project Ideas

Use your new skills to help others, the heart of **Learn and Help**! 💛

- 📅 **Volunteer Hour Tracker**: log hours, save to a file, show totals.
- 🥫 **Food Drive Counter**: track donations by category with an object.
- 📚 **Study Buddy Quiz**: make flashcards for younger students.
- 🌍 **Eco-Footprint Calculator**: estimate and compare daily habits.
- 🗂️ **Community Resource List**: a searchable page of local helpers.

### 🎓 Capstone Example: Mini Quiz Game

```js
const readline = require("node:readline/promises");

const questions = [
  { q: "What keyword makes a variable that can change?", a: "let" },
  { q: "What symbol means strict equals?", a: "===" },
  { q: "What method adds an item to the end of an array?", a: "push" },
];

class Quiz {
  constructor(questions) {
    this.questions = questions;
    this.score = 0;
  }

  async run() {
    const rl = readline.createInterface({
      input: process.stdin,
      output: process.stdout,
    });

    for (const [i, item] of this.questions.entries()) {
      const answer = await rl.question(`Q${i + 1}: ${item.q}\n> `);
      if (answer.trim().toLowerCase() === item.a) {
        console.log("✅ Correct!\n");
        this.score++;
      } else {
        console.log(`❌ Not quite. The answer is "${item.a}".\n`);
      }
    }

    rl.close();
    console.log(`🏁 Final score: ${this.score} / ${this.questions.length}`);
  }
}

new Quiz(questions).run();
```

<br/>

---

## 📖 Keep Learning: Free Resources

| 📚 Resource | 🔗 Link | 💡 Best for |
|---|---|---|
| **MDN Web Docs** | https://developer.mozilla.org/en-US/docs/Web/JavaScript | The official, trusted reference |
| **JavaScript.info** | https://javascript.info | Clear, modern tutorials |
| **freeCodeCamp** | https://www.freecodecamp.org | Free interactive courses & projects |
| **Khan Academy** | https://www.khanacademy.org/computing | Beginner-friendly lessons |
| **Eloquent JavaScript** | https://eloquentjavascript.net | A free online book |
| **The Odin Project** | https://www.theodinproject.com | Full web-development path |

### 🔭 What to learn next

1. 🌐 **HTML & CSS**: build the pages JavaScript brings to life.
2. 🖱️ **The DOM & events**: make buttons, forms, and games in the browser.
3. ⏱️ **Async JavaScript**: `Promise`, `async/await`, `fetch` (get data from the internet).
4. 📦 **npm & modules**: use code other people wrote.
5. ⚛️ **Frameworks**: React, Vue, or Svelte.

<br/>

---

<div align="center">

<img src="learn_and_help_logo.jpeg" alt="Learn and Help" width="120" />

<div style="height:8px;background:linear-gradient(90deg,#FFC300,#FF6A00,#E81A0A,#7A0000);border-radius:6px;"></div>

<h3 style="color:#0B1B5A;">💛 Learn. Code. Help. Repeat. 💛</h3>

<p><b>Learn and Help</b> · <i>Code For Good</i><br/>
<a href="https://www.learnandhelp.com" style="color:#E81A0A;">www.learnandhelp.com</a></p>

<sub>Every line of code you write can make someone's day a little better. Keep going! 🚀</sub>

</div>
