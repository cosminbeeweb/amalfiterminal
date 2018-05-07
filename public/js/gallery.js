const openGallery = () => {
    document.querySelector('.fullscreen-gallery').classList.add('active');
    document.querySelector('.content-wrapper').classList.add('behind');
    document.body.style.overflow = 'hidden';
};

const closeGallery = () => {
    document.querySelector('.fullscreen-gallery').classList.remove('active');
    document.querySelector('.content-wrapper').classList.remove('behind');
    document.body.style.overflow = 'visible';
}