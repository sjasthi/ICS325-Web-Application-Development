# ICS 325 Final Project (Fall 2026)
# Pathways to Scholarships — `scholarships` Web Application

### Requirements Specification and 10-Iteration Plan

---

## 1. Project Overview

Students and parents often don't know which scholarships exist for middle and high school students, who is eligible, how much they pay, or when applications are due. The information is scattered across dozens of aggregator sites, state agencies, foundations, and local organizations.

In this project, each team (3 members) will build **`scholarships`**, a full-stack, responsive web application that helps **parents and students find scholarships based on field of study, grade level, and state**.

This project is paired with the Data Science class's *Pathways to Scholarships* project. The Data Science students are collecting scholarship data (one Excel file per student, covering an assigned state and a national theme). **Your application is the system that batch-loads those files, cleans and de-duplicates them into one nationwide dataset, makes that dataset searchable for families, and exports the merged dataset back to the Data Science class for analysis.** Real users will depend on your data being correct.

Reference documents:

- Project background: [final_project_pathways_to_scholarships.md](https://github.com/sjasthi/Python-DS-Data-Science/blob/main/final_project_demo/final_project_pathways_to_scholarships.md)
- Data collection strategy: [scholarships-data-collection-strategy.md](https://github.com/sjasthi/Python-DS-Data-Science/blob/main/final_project_demo/scholarships-data-collection-strategy.md)

---

## 2. Technology Stack (Required)

| Layer | Technology |
|---|---|
| Front end | HTML5, CSS3, JavaScript, jQuery, Bootstrap 5 |
| Back end | PHP 8.x (vanilla PHP, no frameworks) |
| Database | MySQL 8.x (or MariaDB), accessed via **PDO with prepared statements** |
| Libraries | CDN-only (e.g., Bootstrap, jQuery, DataTables, Chart.js, SheetJS). No build tools, no npm, no Composer. |
| Version control | GitHub (one repository per team; instructor added as collaborator) |
| Development | XAMPP / MAMP / WAMP locally |
| Deployment | Shared hosting (Bluehost or equivalent) — the app must run on a live URL by the final iteration |

---

## 3. ICS 325 Learning Objectives Addressed

| Learning Objective | Where It Shows Up in This Project |
|---|---|
| Build structured, semantic, accessible web pages | All public and authenticated pages |
| Create responsive layouts that work on phones, tablets, and desktops | Bootstrap grid, responsive tables/cards, mobile navigation |
| Use client-side scripting for interactivity and validation | jQuery event handling, AJAX search filters, form validation |
| Write server-side code that processes forms and sessions | PHP registration, login, CRUD, file upload, import pipeline |
| Design and implement a relational database | Normalized schema, foreign keys, many-to-many tables, indexes |
| Perform CRUD operations securely | PDO prepared statements, input validation, output escaping |
| Implement authentication and role-based authorization | Five roles with page- and action-level access control |
| Apply web security practices | Password hashing, CSRF tokens, XSS prevention, file upload safety |
| Handle file upload and data import/export | Batch import of Excel/CSV files, CSV export |
| Work as a software team using version control and iterations | GitHub branches, pull requests, iteration reports and demos |
| Deploy a web application to a production server | Live deployment with configuration kept out of the repo |

---

## 4. Stakeholders and Roles

| Role | Who They Are | What They Can Do |
|---|---|---|
| **Visitor** | Anyone not logged in | Browse and search scholarships, view scholarship details, view public statistics, read About/FAQ/Contact, register |
| **Student** | Middle or high school student (U.S.) | Everything a visitor can do, plus maintain a profile (grade, state, interests), see personalized matches, save scholarships, track deadlines and application status |
| **Parent** | Parent or guardian | Everything a visitor can do, plus manage one or more child profiles, see matches and saved scholarships for each child, track deadlines per child |
| **Administrator** | Data steward (instructor, TA, or designated staff) | Create, edit, verify, and archive scholarships; run batch imports; review import errors and duplicates; view data quality and usage dashboards; export the dataset |
| **Super-admin** | System owner | Everything an administrator can do, plus create and manage users of any role, assign/change roles, activate/deactivate accounts, view the audit log, manage reference data (states, grades, categories, fields of study) |

> **Privacy note for minors.** Middle school users may be under 13. Collect the minimum data needed: grade level, state, and interests. Do **not** collect date of birth, school name, home address, or phone number. A parent account can create and manage a child profile without the child having their own login.

---

## 5. Functional Requirements

Requirement IDs are used in the iteration plan (Section 8) and should be referenced in team commit messages and iteration reports.

### 5.1 Public Site (FR-PUB)

| ID | Requirement |
|---|---|
| FR-PUB-01 | Home page explains the purpose of the site and offers a quick search (state, grade, field of study). |
| FR-PUB-02 | About, FAQ, and Contact pages. The Contact page has a validated form that stores messages in the database. |
| FR-PUB-03 | A consistent header, navigation bar, and footer across all pages (shared PHP includes). Navigation changes based on the logged-in role. |
| FR-PUB-04 | A public "Scholarship Facts" page with summary statistics and charts (see FR-DASH). |

### 5.2 Scholarship Search and Browse (FR-SRCH) — *the core problem*

| ID | Requirement |
|---|---|
| FR-SRCH-01 | Filter scholarships by **state** (including "National"), **grade level** (6–12), and **field of study**. These three filters are mandatory. |
| FR-SRCH-02 | Additional filters: award amount range, deadline range, category (merit, need, community service, leadership, STEM, arts, etc.), renewable, essay required, financial need required. |
| FR-SRCH-03 | Keyword search over scholarship name, provider, and description/notes. |
| FR-SRCH-04 | Sort by deadline (soonest first, default), award amount, and name. |
| FR-SRCH-05 | Results are paginated and update without a full page reload (jQuery AJAX returning JSON or HTML fragments). |
| FR-SRCH-06 | Expired scholarships (deadline in the past) are hidden by default, with an option to show them. |
| FR-SRCH-07 | A scholarship detail page shows all fields, a prominent link to the **official provider URL**, and the date the information was last verified. |
| FR-SRCH-08 | Results display as cards on small screens and as a table on large screens. |

### 5.3 Accounts and Authentication (FR-AUTH)

| ID | Requirement |
|---|---|
| FR-AUTH-01 | Self-registration for Student and Parent roles only. Administrator and Super-admin accounts are created only by a Super-admin. |
| FR-AUTH-02 | Login and logout using PHP sessions. Passwords stored with `password_hash()` and checked with `password_verify()`. |
| FR-AUTH-03 | Server-side and client-side validation of all registration fields (email format, password strength, required fields, unique email). |
| FR-AUTH-04 | Session hardening: regenerate session ID on login, session timeout after inactivity. |
| FR-AUTH-05 | Every protected page and every action checks the user's role on the server. Hiding a menu link is not access control. |
| FR-AUTH-06 | Users can change their password and update their profile. |
| FR-AUTH-07 | A seeded Super-admin account exists after installation (credentials documented only in the private install notes, not in the repo). |

### 5.4 Student and Parent Features (FR-USER)

| ID | Requirement |
|---|---|
| FR-USER-01 | A student profile stores grade level, state, and fields of interest (multiple). |
| FR-USER-02 | A parent can create, edit, and remove multiple child profiles, each with its own grade, state, and interests. |
| FR-USER-03 | "My Matches" page shows scholarships matching the profile's state (or National), grade, and interests, sorted by deadline. |
| FR-USER-04 | Save (bookmark) and un-save scholarships, per student profile. |
| FR-USER-05 | Track application status for each saved scholarship: *Interested → In Progress → Submitted → Awarded / Not Awarded*. |
| FR-USER-06 | "Upcoming Deadlines" view listing saved scholarships due in the next 30/60/90 days, with visual highlighting for items due soon. |

### 5.5 Scholarship Management (FR-ADM)

| ID | Requirement |
|---|---|
| FR-ADM-01 | Administrators can create, view, edit, and archive (soft delete) scholarships using forms covering all data fields in Section 6. |
| FR-ADM-02 | Server-side validation: required fields, valid URL, numeric award amounts, valid dates, valid state codes, valid grade levels. |
| FR-ADM-03 | Administrators can mark a scholarship as verified, which updates the verification date and records who verified it. |
| FR-ADM-04 | Administrators can manage providers (organizations), including provider type. |
| FR-ADM-05 | The admin scholarship list uses a sortable, filterable table (e.g., DataTables) with bulk actions (archive, mark verified). |

### 5.6 Batch Import (FR-IMP) — *the integration point with the Data Science class*

| ID | Requirement |
|---|---|
| FR-IMP-01 | Administrators can download the official import template (column headers match the Data Science "Recommended Data Fields"). |
| FR-IMP-02 | Administrators can upload one or more `.xlsx` or `.csv` files. (Suggested approach: parse `.xlsx` in the browser with SheetJS from a CDN and send the rows to PHP as JSON; parse `.csv` in PHP with `fgetcsv()`.) |
| FR-IMP-03 | Uploaded rows go to a **staging area** first, not directly into the live scholarship table. |
| FR-IMP-04 | Each row is validated and cleaned: trim leading/trailing spaces, remove non-breaking spaces, normalize state names to 2-letter codes, normalize Yes/No/Unknown fields, parse award amounts ("$1,000" → 1000), parse dates, split multi-value grade levels ("9-12" → 9,10,11,12). |
| FR-IMP-05 | Each row is checked against the data collection rules: a row is **national** if open to residents of two or more states, otherwise **state/local**; the official URL is present and well-formed. |
| FR-IMP-06 | **Duplicate detection uses the official URL as the key** (normalized: lowercase host, no trailing slash, no tracking parameters). Duplicates within the file, across files, and against existing live records are flagged. |
| FR-IMP-07 | A validation report shows each row as *Ready*, *Warning* (imported but flagged, e.g., missing optional field), *Duplicate*, or *Error* (cannot import), with the reason. |
| FR-IMP-08 | The administrator reviews the report and commits the batch. Only *Ready* and *Warning* rows are inserted. The whole commit runs in a database transaction. |
| FR-IMP-09 | Each import batch records who uploaded it, when, the source file name, the contributing student (from the file name `LastName_FirstName`), and row counts by status. |
| FR-IMP-10 | An administrator can roll back an entire batch. |

### 5.7 Data Quality and Export (FR-DQ)

| ID | Requirement |
|---|---|
| FR-DQ-01 | Data quality dashboard showing: expired deadlines, verification dates older than 6 months (stale), records missing key fields, possible duplicates (same provider + similar name, different URL). |
| FR-DQ-02 | Export the full live dataset (or a filtered subset) to CSV using the Data Science template column names, so the Data Science class can use the merged dataset in their analysis. |
| FR-DQ-03 | Coverage report: number of scholarships per state and per national theme, highlighting states or themes with few or no records. |

### 5.8 Dashboards and Visualizations (FR-DASH)

| ID | Requirement |
|---|---|
| FR-DASH-01 | Charts (Chart.js) for: scholarships by state, award amount distribution, deadlines by month, scholarships by category and field, middle vs. high school vs. both. |
| FR-DASH-02 | Summary cards: total scholarships, total award dollars, number of states covered, number of scholarships open to middle school students. |
| FR-DASH-03 | Admin usage statistics: registered users by role, most-saved scholarships, most-searched states/fields (search terms logged anonymously). |

### 5.9 User Administration (FR-SA) — *Super-admin only*

| ID | Requirement |
|---|---|
| FR-SA-01 | Create users of any role, including Administrator and Super-admin. |
| FR-SA-02 | Change a user's role; activate or deactivate accounts. The system prevents removing or demoting the last active Super-admin. |
| FR-SA-03 | Reset a user's password (sets a temporary password the user must change at next login). |
| FR-SA-04 | Manage reference data: states, grade levels, categories, fields of study, provider types, national themes. |
| FR-SA-05 | Audit log of significant actions: logins, role changes, scholarship edits, imports, rollbacks, exports. Viewable and filterable by the Super-admin. |

---

## 6. Data Requirements

### 6.1 Scholarship Fields

The scholarship record must hold every field in the Data Science template so that import and export round-trip without loss.

| Template Field (import/export column) | Notes for the Database Design |
|---|---|
| Scholarship name | Required |
| Scholarship provider/organization | Foreign key to a `providers` table |
| Provider type | Foundation/nonprofit, corporation, college/university, government agency, professional association, community organization, other |
| Official scholarship URL | Required; normalized copy stored for duplicate detection; unique among active records |
| Discovery source | Aggregator or site where it was found |
| State/region | 2-letter code, or "National" |
| National vs. state/local | Enum |
| Eligible grade levels | Many-to-many with a `grade_levels` table (6–12) |
| Middle school / high school / both | Can be derived from grade levels; store or compute consistently |
| Scholarship category | Many-to-many with `categories` |
| Field/area of interest | Many-to-many with `fields_of_study` |
| Award amount | Numeric; store min and max if a range is given |
| Number of awards | Nullable integer |
| Renewable | Yes / No / Unknown |
| Maximum potential value | Numeric, nullable |
| Application open date | Nullable date |
| Application deadline | Date; nullable for rolling deadlines, with a "rolling" flag |
| Residency requirement | Text |
| Minimum GPA | Nullable decimal |
| Financial need required | Yes / No / Unknown |
| Essay required | Yes / No / Unknown |
| Recommendation required | Yes / No / Unknown |
| Transcript/test score required | Yes / No / Unknown |
| Community service requirement | Yes / No / Unknown |
| Leadership requirement | Yes / No / Unknown |
| Other major eligibility requirements | Text |
| Application method | Online form, email, mail, other |
| Verification date | Date |
| Notes | Text |

Additional system fields: national theme (if national), contributing student, import batch ID, created/updated timestamps and users, status (active/archived).

### 6.2 Minimum Tables

At minimum: `users`, `roles`, `student_profiles` (linked to a student user or a parent user), `profile_interests`, `scholarships`, `providers`, `states`, `grade_levels`, `scholarship_grades`, `categories`, `scholarship_categories`, `fields_of_study`, `scholarship_fields`, `national_themes`, `saved_scholarships`, `import_batches`, `import_staging_rows`, `contact_messages`, `search_log`, `audit_log`.

Use foreign keys, appropriate indexes (state, deadline, normalized URL), and `utf8mb4` encoding. Provide the schema as a versioned SQL script in the repo.

---

## 7. Non-Functional Requirements

| ID | Requirement |
|---|---|
| NFR-01 **Responsive** | All pages usable at 375px (phone), 768px (tablet), and 1280px+ (desktop). No horizontal page scrolling. |
| NFR-02 **Security** | PDO prepared statements for every query; all output escaped with `htmlspecialchars()`; CSRF token on every state-changing form; uploaded files checked for type and size and never executed; DB credentials in a config file excluded from Git. |
| NFR-03 **Accessibility** | Semantic HTML, labels on all form fields, alt text on images, keyboard-navigable menus, sufficient color contrast (WCAG 2.1 AA target). |
| NFR-04 **Performance** | Search results return in under 2 seconds with the full class dataset loaded (expect several hundred to a few thousand records). |
| NFR-05 **Usability** | Plain language suitable for parents and middle school students; clear error messages; confirmation before destructive actions. |
| NFR-06 **Maintainability** | Consistent folder structure, shared includes, no copy-pasted DB connection code, meaningful names, comments on non-obvious logic. |
| NFR-07 **Data integrity** | The official provider URL is always shown so users can confirm details at the source. Every record shows its verification date. |
| NFR-08 **Deployability** | The app runs on shared hosting with PHP and MySQL only. An install guide lets someone set it up from the repo in under 30 minutes. |

---

## 8. Iteration Plan (10 Iterations)

Each iteration ends with a **working, demoable increment**. Features are built vertically (database → PHP → UI) so that something usable exists at every step.

### Open-First Development Approach

The plan puts **data first and access control later**. The Data Science class's files are loaded in Iteration 3, and administrators can curate that data from Iteration 4, so every later feature (search, dashboards, matches) is built and tested against real student data rather than a handful of made-up rows. Authentication and role-based access control (RBAC) arrive in Iteration 7, once the core features are stable.

To keep this safe and to make the later lock-down easy, every team follows these rules from Iteration 2 onward:

1. **Security basics are not deferred.** Prepared statements, output escaping, CSRF tokens, and upload checks are required from the first line of code. Only *login and role checks* are postponed.
2. **Stub the access check now.** Create `includes/auth.php` in Iteration 2 with a function such as `require_role(array $roles)` that does nothing yet, and call it at the top of every admin page as you build it. In Iteration 7, you implement the function body once and every page is protected.
3. **Record the acting user now.** Tables that track who did something (`import_batches.uploaded_by`, `scholarships.created_by/updated_by`, `audit_log.user_id`) are created in Iteration 2 as nullable columns. Until Iteration 7, fill them with a `current_user_id()` helper that returns a placeholder development user.
4. **Do not expose open admin pages publicly.** Before Iteration 7, run the app locally, or on the server only inside a directory protected by HTTP Basic Auth (`.htaccess` / `.htpasswd`). An open import or delete page on a public URL can be found and misused within days.
5. **Show that the system is open.** Display a visible "Development mode — no login required" banner on every page until Iteration 7.

### Every Iteration, Every Team Submits

1. **GitHub**: all work merged to `main` through pull requests, with an iteration tag (`iter-01`, `iter-02`, …).
2. **Iteration report** (`https://github.com/sjasthi/ICS325-Web-Application-Development/blob/main/Final-Project/project-weekly-signoff-sheet.txt`): what was planned, what was completed (by requirement ID), what slipped and why, known bugs, and the plan for the next iteration.
3. **Demo**: a short recorded or live demo (3–5 minutes) of the new functionality.
4. **Updated SQL scripts** if the schema changed.

---

### Iteration 1 — Project Setup, Requirements, and Design

**Goal:** The team understands the problem, has a working environment, and has a design to build from.

- Create the team GitHub repository with a README, folder structure, `.gitignore`, and a branching approach; add the instructor as a collaborator.
- Set up the local development environment (XAMPP/MAMP) for every team member.
- Study the Data Science project's template fields and data collection rules; list every column the import must handle.
- Write user stories for each of the five roles (at least 5 per role for Student, Parent, and Administrator; at least 3 for Visitor and Super-admin).
- Produce wireframes (low fidelity is fine) for: Home, Import, Import Validation Report, Admin Scholarship List, Scholarship Edit, Search Results, Scholarship Detail, My Matches, Login/Register, and User Management — for both mobile and desktop.
- Produce the Entity-Relationship Diagram (ERD) for Section 6.
- Build a static Home page with Bootstrap navigation, header, and footer.

**Deliverables:** Repo link, field inventory, user stories, wireframes, ERD, static Home page.
**Requirements:** FR-PUB-01 (static), NFR-01 (start).

---

### Iteration 2 — Database Foundation and Site Skeleton

**Goal:** The database exists, reference data is loaded, and the site has its shared layout and security helpers.

- Write the schema SQL script (all tables in Section 6.2, with keys and indexes), including the `users` and `roles` tables and the nullable "acting user" columns described above.
- Write seed scripts: all 50 states + "National," grade levels 6–12, categories, fields of study, provider types, the 29 national themes, the five roles, and a placeholder development user.
- Create shared PHP includes: config (excluded from Git), PDO connection, header, navigation, footer, development-mode banner.
- Create security helpers: output escaping, CSRF token generation and checking, and the `require_role()` / `current_user_id()` stubs.
- Build the About, FAQ, and Contact pages; the Contact form saves to the database with server-side validation and CSRF protection.
- Hand-enter a few scholarships directly in the database and show them in a simple read-only list to prove the stack works end to end.

**Deliverables:** Schema and seed scripts, shared layout, security helpers and auth stubs, public pages, basic scholarship list.
**Requirements:** FR-PUB-02, FR-PUB-03, Section 6, NFR-02 (start).

---

### Iteration 3 — Bulk Data Load from the Data Science Class

**Goal:** The Data Science students' Excel/CSV files can be loaded cleanly into the database, so the class has a real, merged dataset to work with.

- Downloadable import template matching the Data Science "Recommended Data Fields."
- File upload (`.xlsx` and `.csv`, one or many files) with type and size checks.
- Staging table; cleaning and validation rules from FR-IMP-04 and FR-IMP-05 (trimming, non-breaking spaces, state codes, Yes/No/Unknown, money and date parsing, grade ranges, national vs. state/local).
- Duplicate detection by normalized official URL — within a file, across files, and against records already loaded.
- Validation report page with per-row status (*Ready*, *Warning*, *Duplicate*, *Error*) and reasons.
- Commit (in a transaction) and rollback by batch; the contributing student is captured from the `LastName_FirstName` file name.
- Import history page.
- Test with at least three realistic files the team creates, including deliberate problems: missing URLs, `$1,000` style amounts, non-breaking spaces, full state names, duplicate rows, and a regional scholarship that must be classified as national. Then load any real Data Science files already available.

**Deliverables:** Working import pipeline, test files, first real data loaded, and a short write-up of the cleaning rules implemented.
**Requirements:** FR-IMP-01 through FR-IMP-10.

---

### Iteration 4 — Scholarship Management (Admin CRUD)

**Goal:** Administrators can review and correct the imported data through the UI.

- Admin scholarship list using DataTables with sorting, filtering (by state, contributing student, import batch, national theme), and bulk actions (archive, mark verified).
- Create, view, edit, and archive scholarships, including the many-to-many selections (grades, categories, fields).
- Provider management, including merging two spellings of the same provider found in imported data.
- Server-side validation with clear error messages, and matching client-side (jQuery) validation.
- "Mark as verified" action updating the verification date.
- Audit log entries for create, edit, archive, verify, import, and rollback (attributed to the placeholder user for now).
- Use the tools to clean up issues found in the Iteration 3 data load.

**Deliverables:** Complete admin CRUD, provider management, audit log recording admin actions, a cleaner dataset.
**Requirements:** FR-ADM-01 through FR-ADM-05, FR-SA-05 (logging begins).

---

### Iteration 5 — Scholarship Search (Core Feature)

**Goal:** A parent or student can find scholarships by state, grade level, and field of study, using the real class dataset.

- Search page with the three mandatory filters (state, grade level, field of study) and the additional filters.
- Keyword search, sorting, and pagination.
- AJAX-based filtering with jQuery (results update without a page reload).
- Hide expired scholarships by default.
- Scholarship detail page with the official URL and verification date.
- Responsive results: cards on mobile, table on desktop.
- Quick search on the Home page connected to the search page.
- Anonymous search logging (state, grade, field) for later statistics.

**Deliverables:** Fully working search and detail pages over the imported data.
**Requirements:** FR-SRCH-01 through FR-SRCH-08, FR-PUB-01 (functional).

---

### Iteration 6 — Data Quality, Export, and Dashboards

**Goal:** The merged dataset can be trusted, measured, and shared back with the Data Science class.

- Data quality dashboard: expired deadlines, stale verification dates, records missing key fields, possible duplicates.
- Coverage report by state and by national theme, highlighting gaps.
- CSV export of the full or filtered dataset using the template column names.
- Public "Scholarship Facts" page and admin dashboard with Chart.js charts and summary cards.
- Load the next round of Data Science files and report data issues found back to the instructor.

**Deliverables:** Data quality dashboard, coverage report, CSV export, charts, updated dataset.
**Requirements:** FR-DQ-01 through FR-DQ-03, FR-DASH-01, FR-DASH-02.

---

### Iteration 7 — Authentication, RBAC, and User Management

**Goal:** Lock the system down. Every page built so far now enforces who can see and do what.

- Registration for Student and Parent with client-side and server-side validation.
- Login/logout with sessions, `password_hash()` / `password_verify()`, session ID regeneration, and inactivity timeout.
- Implement the `require_role()` and `current_user_id()` stubs for real; confirm every import, admin, and data quality page calls `require_role()`.
- Role-based navigation menu; remove the development-mode banner.
- Seeded Super-admin account; reassign the placeholder development user's records to a real administrator.
- Super-admin user management: create users of any role, change roles, activate/deactivate, reset passwords, and protect the last Super-admin.
- Reference data management screens and the audit log viewer with filters.
- Profile page and change password.
- An **access-control test matrix**: every page and action × every role, with the expected result (allowed / redirected / 403), tested and recorded. This includes trying admin URLs directly while logged out.

**Deliverables:** Working authentication for all five roles, super-admin module, completed access-control test matrix.
**Requirements:** FR-AUTH-01 through FR-AUTH-07, FR-SA-01 through FR-SA-05.

---

### Iteration 8 — Student and Parent Features

**Goal:** Registered families get personalized value from the site.

- Student profile (grade, state, interests).
- Parent management of multiple child profiles.
- "My Matches" page driven by the profile.
- Save/un-save scholarships per profile (AJAX toggle from search results and detail pages).
- Application status tracking.
- "Upcoming Deadlines" view with due-soon highlighting.
- Parent dashboard showing all children's saved scholarships and deadlines in one place.
- Confirm that one user can never see or change another user's profiles or saved items (test by changing IDs in URLs and AJAX requests).

**Deliverables:** Working personalization features for the Student and Parent roles.
**Requirements:** FR-USER-01 through FR-USER-06.

---

### Iteration 9 — Security Hardening, Accessibility, and Polish

**Goal:** The app is secure, accessible, responsive, and fast.

- Security review against NFR-02: check every query, output, form, and upload; fix findings.
- Accessibility review against NFR-03 (keyboard navigation, labels, contrast).
- Responsive testing at the three required widths on every page; fix layout issues.
- Performance check with the full dataset (generate additional test data if needed); add indexes where queries are slow.
- Admin usage statistics (users by role, most-saved scholarships, most-searched states and fields).
- Deploy a staging version to the hosting server (now safe, since login is required for admin pages).

**Deliverables:** Security and accessibility checklist (completed), responsive test results, usage statistics, staging URL.
**Requirements:** FR-DASH-03, NFR-01 through NFR-05.

---

### Iteration 10 — Final Data Load, Testing, Deployment, and Final Presentation

**Goal:** Deliver a production-ready application loaded with the full class dataset.

- Load the final Data Science files; resolve duplicates and errors; export the merged dataset for the Data Science class.
- End-to-end testing of every role using a written test plan (test case, steps, expected result, actual result).
- User acceptance testing with at least two people outside the team, acting as a parent and a student; document their feedback and the fixes made.
- Fix remaining defects; freeze features.
- Deploy to production and verify on a phone and a desktop.
- Final documentation in the repo: README, install guide, user guide (visitor/student/parent), admin guide (admin/super-admin), final ERD, and known limitations.
- Final presentation and live demo (10–15 minutes): problem, architecture, key features by role, import pipeline, data insights, lessons learned.

**Deliverables:** Production URL, final tagged release (`v1.0`), test plan and results, documentation, merged dataset export, final presentation.
**Requirements:** All; NFR-06 through NFR-08.

---

## 9. Iteration Summary

| Iteration | Focus | Key Outcome |
|---|---|---|
| 1 | Setup, requirements, design | Repo, field inventory, user stories, wireframes, ERD, static Home page |
| 2 | Database and site skeleton | Schema, seed data, shared layout, security helpers, auth stubs |
| 3 | **Bulk data load** | Excel/CSV import with cleaning, validation, dedup, rollback; first real data |
| 4 | **Admin CRUD** | Admins review and correct imported data; provider management; audit log |
| 5 | Scholarship search | Search by state, grade, and field over the real dataset |
| 6 | Data quality, export, dashboards | Quality and coverage reports, CSV export to DS class, charts |
| 7 | **Authentication and RBAC** | Login, roles enforced on every page, super-admin user management |
| 8 | Student and parent features | Profiles, matches, saved scholarships, deadlines |
| 9 | Security, accessibility, polish | Hardening, responsive and accessibility testing, staging deployment |
| 10 | Final delivery | Final data load, UAT, production deployment, documentation, presentation |

---

## 10. Definition of Done (applies to every feature)

A feature is **done** only when:

- It works on the team's deployed or shared environment, not just one laptop.
- It is merged to `main` through a reviewed pull request.
- All queries use prepared statements, all output is escaped, and all forms have CSRF protection.
- From Iteration 7 on, role checks are enforced on the server (before that, the page calls the `require_role()` stub).
- It displays correctly on phone and desktop widths.
- It is described in the iteration report with its requirement ID.
