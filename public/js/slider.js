let sliders = {};

const heroSlider = id => {
    makePagination(id);
    generateSlider(id);
};

const generateSlider = id => {
    let nrSlides = document.querySelectorAll('#' + id + ' > div').length;

    document.getElementById(id).style.width = nrSlides * 100 + "%";
    document.querySelectorAll('#' + id + ' > div').forEach(slide => slide.style.width = 100 / nrSlides + "%");

    sliders[id] = [];

    for (let i = 0; i < nrSlides; i++)
        sliders[id].push(i+1);

    let parentNode = document.getElementById(id).parentNode;

    parentNode.querySelectorAll('.pag').forEach(pag => pag.addEventListener('click', () => changeSlide(pag, id)));
    parentNode.querySelectorAll('.slider-navigation i').forEach(nav => nav.addEventListener('click', () => changeSlide(nav, id)));
};

const changeSlide = (item, slider) =>
{
    let slide = item.getAttribute('slide');
    let firstSlide = sliders[slider][0];
    let lastSlide = sliders[slider][sliders[slider].length - 1];
    let parentNode = document.getElementById(slider).parentNode;

    parentNode.querySelectorAll('.pag').forEach(pag => pag.classList.remove('active'));
    parentNode.querySelector('.pag:nth-child(' + slide +')').classList.add('active');

    let slideLeft = parseInt(slide) === firstSlide ? lastSlide : String(parseInt(slide) - 1);
    let slideRight = parseInt(slide) === lastSlide ? firstSlide : String(parseInt(slide) + 1);

    parentNode.querySelector('.slider-navigation i.left').setAttribute('slide', slideLeft);
    parentNode.querySelector('.slider-navigation i.right').setAttribute('slide', slideRight);

    if (slide == firstSlide)
        document.getElementById(slider).style.marginLeft = '0';
    else
        document.getElementById(slider).style.marginLeft = '-' + sliders[slider].indexOf(parseInt(slide)) + '00%';
};

const makePagination = id =>
{
    let slides = document.querySelectorAll('#' + id + ' > div').length;
    let parentNode = document.getElementById(id).parentNode;

    for (let i = 1; i <= slides; i++)
    {
        let pag = document.createElement('span');
        pag.setAttribute('slide', String(i));

        i === 1 ? pag.className = 'pag active' : pag.className = 'pag';
        parentNode.querySelector('.pagination').appendChild(pag);
    }

    parentNode.querySelector('.pagination').style.left = 'Calc(50% - ' + slides*22 + 'px)';
};