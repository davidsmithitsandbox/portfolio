/**
 * Takes an array of numbers and adds them.
 * 
 * Returns an number.
 */
function add(array) {
    if (Array.isArray(array) === true) {
        let sum = 0;

        if (array.every(isNumber)) {
            array.forEach(element => {
                sum = sum + element;
            });
        } else {
            return false;
        }
        return sum;
    } else {
        return false;
    }

    function isNumber(number) {
        if (typeof number === 'number') {
            return true;
        } else {
            return false;
        }
    }
}
