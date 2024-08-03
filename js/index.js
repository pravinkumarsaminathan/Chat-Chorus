document.querySelectorAll('.avatar').forEach(avatar => {
    avatar.addEventListener('click', function () {
        document.querySelectorAll('.avatar').forEach(av => av.classList.remove('selected'));
        this.classList.add('selected');
        document.getElementById('selected-avatar').value = this.src;
    });
});
// document.addEventListener('DOMContentLoaded', () => {
//     const avatars = document.querySelectorAll('.avatar');
//     const selectedAvatarInput = document.getElementById('selected-avatar');

//     avatars.forEach(avatar => {
//         avatar.addEventListener('click', () => {
//             avatars.forEach(av => av.classList.remove('selected'));
//             avatar.classList.add('selected');
//             selectedAvatarInput.value = avatar.getAttribute('data-avatar');
//         });
//     });
// });