document.querySelectorAll('.avatar').forEach(avatar => {
    avatar.addEventListener('click', function () {
        document.querySelectorAll('.avatar').forEach(av => av.classList.remove('selected'));
        this.classList.add('selected');
        document.getElementById('selected-avatar').value = this.src;
    });
});
