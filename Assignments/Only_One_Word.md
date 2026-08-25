# ICS 325: Web Application Development
## Assignment 2 — Only One Word
**Total: 75 Points**

## Overview

In this assignment, you will design and develop a web application called **Only One Word**.

The application generates a special type of word-search puzzle. Unlike a traditional word search containing many hidden words, each puzzle contains **exactly one occurrence of the user-supplied word**. All remaining grid cells are filled using letters from that same word.

The application must generate the requested number of puzzles and then display the corresponding solutions, with the hidden word clearly highlighted in green.

You may use any combination of web technologies covered in the course, including:

- HTML
- CSS
- JavaScript
- jQuery
- Bootstrap
- PHP

You must use PHP, HTML, CSS, JavaScript for this assignment. JQuery and Bootstrap are optional.

---

## Functional Requirements

### 1. User Input

Your application must allow the user to enter:

1. **Grid size**
2. **Number of puzzles to generate**
3. **Input word**

The application must validate all user input before generating puzzles.

---

### 2. Grid Size

The grid must be square.

Allowed grid sizes are:

- Minimum: **5 × 5**
- Maximum: **20 × 20**

The supplied word must fit within the selected grid size in at least one valid direction.

If the word cannot fit in the selected grid, the application must display a clear validation message.

---

### 3. Input Word

The application must support words containing repeated letters.

Examples include:

- HELLO
- BALLOON
- LETTER
- MISSISSIPPI

The application should treat the supplied word consistently with respect to capitalization. For example, you may convert all letters to uppercase before generating the puzzle.

---

## Puzzle Generation Rules

### 4. Word Placement

The input word must be placed at a **random location** in the grid.

The application must also randomly choose one of the **8 possible directions**:

1. Left to Right
2. Right to Left
3. Top to Bottom
4. Bottom to Top
5. Diagonal Down-Right
6. Diagonal Down-Left
7. Diagonal Up-Right
8. Diagonal Up-Left

The user does **not** choose the location or direction.

---

### 5. Filler Characters

Every grid cell that is not part of the intentionally placed word must contain a letter taken from the supplied word.

The filler characters must preserve the **relative frequency of letters in the supplied word**, but the letters must also be **well distributed rather than clustered together**.

For example, if the word is:

`CAT`

then the filler cells should be generated in randomized groups based on the complete set of letters in the word. Every group of three filler positions should contain one `C`, one `A`, and one `T`, in a random order, such as:

- `C T A`
- `A C T`
- `T A C`

The application should **not** generate large clusters such as many `C` characters together followed by many `A` characters and then many `T` characters.

For a word containing repeated letters, the same rule applies using the complete letter multiset of the word. For example, if the word is:

`HELLO`

then each complete group of five filler positions should contain exactly:

- H — 1 occurrence
- E — 1 occurrence
- L — 2 occurrences
- O — 1 occurrence

in a randomized order.

Similarly, for `BALLOON`, each complete group of seven filler positions should contain the same letter frequencies as `BALLOON`, randomly shuffled before being placed into the grid.

One acceptable approach is to repeatedly shuffle the characters of the supplied word and use each shuffled copy to fill the next group of cells. If the number of remaining filler cells is smaller than the word length, use a partial shuffled group for the final cells.

This requirement ensures that the filler letters preserve the word's frequency while also remaining visually mixed throughout the puzzle.

---

### 6. Exactly One Occurrence of the Word

This is the most important requirement of the assignment.

After the grid is generated, the supplied word must appear **exactly once** when the entire grid is searched in all 8 directions.

For example, if the supplied word is:

`CAT`

then there must be exactly one occurrence of `CAT`.

An occurrence of:

`TAC`

elsewhere in the grid is permitted because `TAC` is not the supplied word.

Your program must therefore verify the completed puzzle before displaying it.

If the supplied word occurs zero times or more than once, the application should regenerate or modify the puzzle until a valid puzzle is produced.

---

### 7. Multiple Puzzles

The user may request multiple puzzles in a single operation.

For example:

> Grid Size: 10 × 10  
> Number of Puzzles: 20  
> Word: COMPUTING

The application must generate **20 different valid puzzle grids**.

The location and direction of the hidden word should be randomly selected for each puzzle.

The generated puzzles should not simply be identical copies of the same grid.

---

## Display Requirements

### 8. Puzzle Section

The application must first display all generated puzzles in a clearly labeled **Puzzles** section.

Each puzzle should have a label such as:

- Puzzle 1
- Puzzle 2
- Puzzle 3

The hidden word must **not** be visually identified in this section.

The grid should be formatted clearly so that rows and columns are easy to read.

---

### 9. Solutions Section

After all puzzles are displayed, the application must display a separate **Solutions** section.

Each solution must show the corresponding puzzle grid.

The cells containing the intentionally placed word must be **highlighted in green**.

For example:

- Solution 1 corresponds to Puzzle 1
- Solution 2 corresponds to Puzzle 2
- and so on

---

## Validation and Error Handling

Your application should handle invalid input gracefully.

At minimum, validate the following:

- Grid size is between 5 and 20.
- Number of puzzles is a valid positive integer.
- A word has been entered.
- The word contains valid alphabetic characters.
- The word can fit inside the selected grid.
- The requested puzzles can be successfully generated.

Display meaningful messages instead of allowing the application to fail silently.

---

## User Interface

Your application should provide a clean and usable interface.

At minimum, the page should contain:

- Application title: **Only One Word**
- Grid-size input
- Number-of-puzzles input
- Word input
- Generate button
- Puzzle section
- Solution section

You may use CSS, Bootstrap, or other permitted technologies to improve the presentation.

The application should be easy for another user to understand without requiring additional instructions.

---

## Technical Expectations

Your implementation should demonstrate concepts from web application development.

You may use any reasonable architecture or combination of technologies.

For example:

- The entire puzzle-generation algorithm may be implemented in JavaScript.
- PHP may be used to process the form and generate the puzzles.
- JavaScript and PHP may both be used.
- jQuery and Bootstrap may be used but are not required.

The quality of the solution will be evaluated based on functionality, correctness, organization, and usability rather than on the number of technologies used.

---

## Suggested Algorithm

You are free to design your own solution. One possible approach is:

1. Read and validate the user input.
2. Randomly select one of the 8 directions.
3. Determine all possible starting locations where the word fits in that direction.
4. Randomly choose a valid starting location.
5. Place the word in the grid.
6. Fill all remaining cells using randomly selected letters from the supplied word.
7. Search the completed grid in all 8 directions.
8. Count how many times the supplied word occurs.
9. Accept the puzzle only if the count is exactly 1.
10. Otherwise, generate the puzzle again.
11. Repeat until the requested number of valid puzzles has been created.
12. Display the puzzles.
13. Display the solutions with the intended word placement highlighted in green.

**Important:** Your program should avoid an uncontrolled infinite loop. Consider using a reasonable retry limit and displaying an appropriate message if a valid puzzle cannot be generated after many attempts.

---

## Example

Suppose the user enters:

```text
Grid Size: 5
Number of Puzzles: 2
Word: HELLO
```

The application should generate two different 5 × 5 grids.

Each grid must:

- contain exactly one `HELLO`,
- place `HELLO` in one of the 8 permitted directions,
- use only `H`, `E`, `L`, and `O` as filler characters,
- reflect the repeated `L` when generating filler characters.

The **Puzzles** section should show the grids without revealing the word.

The **Solutions** section should show the same grids with the five cells forming `HELLO` highlighted in green.

---

## Deliverables

Submit the following two items.

### 1. Source Code — ZIP File

Submit a ZIP file containing the **entire web application source code**.

Include all files necessary to run your application, such as:

- HTML files
- CSS files
- JavaScript files
- PHP files, if used
- Images or other assets, if used

Your application should run from the submitted files without requiring the instructor to reconstruct missing components.

### 2. Demo Video

Create a short demonstration video using **Zoom**.

Maximum recommended length: **2 minutes**.

The video should demonstrate:

- entering the required inputs,
- generating multiple puzzles,
- the puzzle section,
- the solution section,
- the green highlighting of the hidden word,
- at least one example involving a word with repeated letters.

Submit the **shareable link to the demo video**.

Make sure the instructor has permission to access the recording.

---

## Grading Rubric — 75 Points

| Category | Points | Description |
|---|---:|---|
| User Input and Validation | 8 | Correctly collects grid size, puzzle count, and word; validates inputs and displays useful error messages. |
| Random Word Placement | 10 | Correctly places the word at a random valid location and supports all 8 directions. |
| Filler Character Generation | 8 | Uses only letters from the supplied word and appropriately preserves repeated-letter frequency. |
| Exactly-One-Word Verification | 15 | Correctly searches all 8 directions and ensures the supplied word occurs exactly once in every generated puzzle. |
| Multiple Unique Puzzles | 8 | Generates the requested number of different puzzles with randomized placement/direction. |
| Puzzle Display | 6 | Clearly displays all puzzles in an organized puzzle section without revealing the answer. |
| Solution Display | 7 | Displays corresponding solutions and correctly highlights the hidden word in green. |
| User Interface and Usability | 5 | Application is clear, readable, organized, and easy to use. |
| Code Quality | 5 | Code is reasonably organized, readable, commented where appropriate, and avoids unnecessary duplication. |
| Submission and Demo | 3 | Complete ZIP submitted and accessible 2-minute Zoom demo link provided. |
| **Total** | **75** | |

---

## Important Notes

- The puzzle must contain the supplied word **exactly once**.
- Searching for the word must consider **all 8 directions**.
- Reversed strings do not count unless they independently match the supplied word.
- Words containing repeated letters must be supported.
- All filler characters must come from the supplied word.
- The word placement must be randomly determined by the application.
- Every requested puzzle must be independently generated and valid.
- PHP, jQuery, and Bootstrap are **permitted but not required**.
- Students may choose any reasonable combination of the permitted web technologies.

---

## Academic Integrity

You are expected to understand and be able to explain the code you submit.

During grading or review, you may be asked to explain:

- how the word is placed,
- how filler characters are generated,
- how your program detects multiple occurrences of the word,
- how all 8 directions are searched,
- how the solution highlighting is produced.

Code that you cannot reasonably explain may not receive full credit.
