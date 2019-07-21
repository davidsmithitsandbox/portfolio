/**
 * Takes an array of numbers and multiplies them.
 * 
 * Returns an number.
 */
function multiply(array) {
    let product = 1;

    for (var i = 0; i < array.length; i++) {
        product = product * array[i];
    }

    return product;
}