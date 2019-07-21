/**
 * Takes an array of numbers and adds them.
 * 
 * Returns an number.
 */
function add(array) {
    let sum = 0;

    for (var i = 0; i < array.length; i++) {
        sum = sum + array[i];
    }

    return sum;
}