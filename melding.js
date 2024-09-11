// Function to show the notification after 10 seconds
setTimeout(() => {
    const notification = document.getElementById('notification');
    notification.classList.remove('hidden');
    notification.classList.add('visible');
}, 10000); // 10000 milliseconden = 10 seconden

// Close notification when button is clicked
document.getElementById('close-notification').addEventListener('click', () => {
    const notification = document.getElementById('notification');
    notification.classList.remove('visible');
    notification.classList.add('hidden');
});
