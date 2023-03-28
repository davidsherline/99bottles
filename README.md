# 99 Bottles of Beer

Write JavaScript code that outputs the children's song [99 Bottles of Beer](https://www.youtube.com/watch?v=u-lV0vrEWXw).

## Getting Started
1. Install the runtime: `brew install node yarn`
1. Install the dependencies: `yarn install`
1. Run the tests: `yarn test`

## Test-Driving a Solution
There are 8 tests in the test suite. 7 are skipped with `test.skip()`. You'll find the first test fails because there is no
class `Bottles` in `lib/bottles.js`; that's a clue where to begin. Write just enough code to get the first test to pass.
Then, unskip the second test by removing the call to `.skip` and write just enough code to get the second test to pass.
Repeat until you've written enough code to pass all 8 tests.

## Helper Methods
The tests infer some methods exist in your `Bottles` class, like `song()`, `verse(number)`, and
`verses(starting, ending)`. For the last method, you may find it useful to use a pre-written helper method available in the
`lib/helpers.js` file named `downTo(max, min)` which creates an array of numbers counting down from `max` to `min`.

For example, calling `downTo(10,1)` will return: `[10, 9, 8, 7, 6, 5, 4, 3, 2, 1]`.
