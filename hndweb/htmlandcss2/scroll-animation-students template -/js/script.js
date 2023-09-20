// Select all elements with class 'box' and store them in the 'boxes' variable
const boxes = document.querySelectorAll('.box')

// Log the 'boxes' variable to the console to see what elements it contains
console.log(boxes);

// Add an event listener to the window that listens for the 'scroll' event and calls the 'checkBoxes' function when the event occurs
window.addEventListener('scroll', checkBoxes)

// Call the 'checkBoxes' function immediately to check the initial state of the boxes
checkBoxes()

// Define the 'checkBoxes' function
function checkBoxes(){
    // Calculate the distance from the top of the window to the point where boxes should be triggered (4/5th of the window height)
    const triggerBottom = window.innerHeight / 5 * 4

    // Log the trigger point to the console
    console.log('trigger Bottom', triggerBottom);

    // Loop through each box in the 'boxes' NodeList
    boxes.forEach(box =>{
        // Get the position of the current box relative to the viewport
        const boxTop = box.getBoundingClientRect().top

        // Log the position of the current box to the console
        console.log('box top', boxTop);

        // Check if the top of the current box is above the trigger point
        if(boxTop < triggerBottom){
            // If the box is above the trigger point, add the 'show' class to it
            box.classList.add('show')
        } 
        else{
            // If the box is below the trigger point, remove the 'show' class from it
            box.classList.remove('show');
        }
    })
}
