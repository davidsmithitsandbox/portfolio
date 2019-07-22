/**
 * Takes an array of numbers and multiplies them.
 * 
 * Returns an number.
 */
function multiply(array) {
    let product = 1;

    array.forEach(element => {
        product = product * element;
    });

    return product;
}