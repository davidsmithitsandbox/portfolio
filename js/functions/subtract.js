/**
 * Takes an array of numbers and adds them.
 * 
 * Returns an number.
 */
function subtract(array) {
    let remainder = array[0];

    for (var i = 1; i < array.length; i++) {
        remainder = remainder - array[i];
    }

    return remainder;
}