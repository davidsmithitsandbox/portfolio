/**
 * Takes an array of numbers and multiplies them.
 * 
 * Returns an number.
 */
function multiply(array) {
    let product = array[0];

    for (var i = 1; i < array.length; i++) {
        product = product * array[i];
    }

    return product;
}