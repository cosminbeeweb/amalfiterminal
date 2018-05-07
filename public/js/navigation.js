window.onload = () => {
    document.querySelector('.toggle-navigation').addEventListener('click', () => {
        document.querySelector('.sidebar-navigation').classList.add('visible');
        document.body.classList.add('no-overflow');
    });

    document.querySelector('.sidebar-navigation .close').addEventListener('click', () => {
        document.querySelector('.sidebar-navigation').classList.remove('visible');
        document.body.classList.remove('no-overflow');
    });

    window.onscroll = () => stickyNavigation();

    stickyNavigation();

    if (
        window.location.href !== window.location.origin + '/' &&
        window.location.href !== window.location.origin + '/lounge/arsenale' &&
        window.location.href !== window.location.origin + '/cafe' &&
        window.location.href !== window.location.origin + '/food'
    )
        heroSlider('slider');

    if (window.location.href === window.location.origin + '/')
    {
        let gridTopics = document.querySelectorAll('.hero-grid-topic');
        console.log(gridTopics);

        gridTopics.forEach(topic => {
            topic.addEventListener('mouseover', () => {
                console.log(1);
                topic.querySelector('.text-overlay').classList.add('visible');
            });
        });

        gridTopics.forEach(topic => {
            topic.addEventListener('mouseleave', () => {
                console.log(2);
                topic.querySelector('.text-overlay').classList.remove('visible');
            });
        });
    }

    if (window.location.pathname === '/lounge/arsenale' ||
        window.location.pathname === '/cafe' ||
        window.location.pathname === '/food'
    )
    {
        let galleryImages = document.querySelectorAll('.gallery .image');

        galleryImages.forEach(image => {
            image.addEventListener('click', event => {
                let img = event.target.getAttribute('image');
                document.querySelector('.fullscreen-gallery .full').setAttribute('src', window.location.origin + '/images/gallery/' + img + '.png');

                openGallery();
            });
        });

        document.body.addEventListener('click', event => {
            if (event.target.parentNode == document.querySelector('.gallery') && event.target.classList.contains('image'))
            {
                if (!document.querySelector('.fullscreen-gallery').classList.contains('active'))
                    openGallery();
            }
            else
            {
                if (event.target.parentNode !== document.querySelector('.gallery') && event.target.parentNode !== document.querySelector('.fullscreen-gallery'))
                {
                    if (document.querySelector('.fullscreen-gallery').classList.contains('active'))
                        closeGallery();
                }
            }
        });
    }
};

const stickyNavigation = () => {
    let topOffset = window.pageYOffset;
    let header = document.getElementById('header');

    if (!header.classList.contains('sticky'))
    {
        if (topOffset > 99)
            header.classList.add('sticky');
    }
    else
    {
        if (topOffset == 0)
            header.classList.remove('sticky');
    }
};