/**
 * Takes an array of numbers and adds them.
 * 
 * Returns an number.
 */
function add(array) {
    let sum = 0;
    
    array.forEach(element => {
        sum = sum + element;
    });

    return sum;
}