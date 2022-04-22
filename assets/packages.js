


const api = "http://localhost:3000/packages";

function start(){
    getPackage(renderlist1);
    getPackage(renderlist2);
}

start()

function getPackage(callback){
    fetch(api)
        .then(function (response) {
            return response.json();
        })
        .then(callback)
}

function renderlist1(packgaes){
    const packageList1 = document.querySelector(".list-1");

    var htmls = packgaes.map(function (package){
        return `
        <div class="col-lg-4 col-sm-6 col-12 packages__item">
        <div class="packages__item-img">
            <img src="${package.img}" alt="" class="packages__item-img-pic">
            <a href="" class="packages__item-img-icon ${package.colorIcon}">
                <img src="${package.logo}" alt="">
            </a>
            <a href="" class="packages__item-img-sale">${package.sale}</a>
        </div>
        <div class="packages__item-content">
            <div class="packages__item-destination">
                <h1 class="packages__item-destination-name">${package.title}</h1>
                <p class="packages__item-destination-place">
                    <i class="ti-location-pin"></i>
                    ${package.location}
                </p>
            </div>
            <div class="packages__item-price">
                <p class="packages__item-price-name">${package.type}
                    <button class="packages__item-price-btn ${package.colorBtn}">+ 1</button>
                </p>
                <span class="packages__item-price-money">
                    <span class="packages__item-price-old">${package.oldPrice}</span>
                    ${package.newPrice} $
                </span>
            </div>
            <div class="packages__item-description">
                <p class="packages__item-description-p">${package.description}</p>
                <a href="" class="packages__item-description-btn ${package.colorBtn}">DETAILS</a>
            </div>
        </div>
    </div>
        `
    });

    packageList1.innerHTML = htmls.join('');
}

function renderlist2(packgaes){
    const packageList2 = document.querySelector(".list-2");

    var htmls = packgaes.map(function (package){
        return `<div class="col-lg-6 col-sm-12 packages__item packages__item-change-layout">
        <div class="packages__item-img" style="width: 45%">
            <img src="${package.img}"" alt="" class="packages__item-img-pic change-pic">
        </div>
        <div class="packages__item-content" style="width: 55%">
            <div class="packages__item-destination">
                <h1 class="packages__item-destination-name">${package.title}</h1>
                <p class="packages__item-destination-place">
                    <i class="ti-location-pin"></i>
                    ${package.location}
                </p>
            </div>
            <div class="packages__item-price">
                <p class="packages__item-price-name">${package.type}
                    <button class="packages__item-price-btn ${package.colorBtn}">+ 1</button>
                </p>
                <span class="packages__item-price-money">
                    <span class="packages__item-price-old">${package.oldPrice}</span>
                    ${package.newPrice} $
                </span>
            </div>
            <div class="packages__item-description">
                <p class="packages__item-description-p">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ut efficitur ante. Donec dapibus dictum scelerisque.</p>
                <a href="" class="packages__item-description-btn  ${package.colorBtn}">DETAILS</a>
            </div>
        </div>
    </div>`
    });

    packageList2.innerHTML = htmls.join('');
}

