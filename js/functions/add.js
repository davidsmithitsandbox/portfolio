/**
 * Takes an array of numbers and adds them.
 * 
 * Returns an number.
 */
function add(array) {
    let sum = array[0];
    
    for (var i = 1; i < array.length; i++) {
        sum = sum + array[i];
    }

    return sum;
}