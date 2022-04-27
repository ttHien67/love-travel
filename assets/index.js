

const apiDestination = "http://localhost:3000/destination";
const apiPackages = "http://localhost:3000/packages";

function start(){
    getDestination(render);
    getPackage(renderPackages);
}

start()

function getDestination(callback){
    fetch(apiDestination)
        .then(function (response) {
            return response.json();
        })
        .then(callback)
}

function render(destinations){
    const destination = document.querySelector(".des__list");


    var htmls = destinations.map(function (destination){
        var desItem = destination.packages.map(function (package){
            return `<a href="" class="des__item--hover-item">${package}</a>`
        })

        return `<div class="col-lg-4 col-sm-6 des__item">
        <img src="${destination.img}" alt="" class="des__item-img">
        <div class="des__item-content">
            <div class="des__item-content-img">
                <img src="${destination.logo}" alt="">
            </div>
            <div class="des__item-content-text">
                <h1 class="des__item-title">${destination.title}</h1>                            
                <p class="des__item-text">${destination.text}</p>
            </div>
        </div>
        <div class="des__item--hover">
            <h1 class="des__item--hover-title">Packages</h1>
            <div class="des__item--hover-list">
                ${desItem}
            </div>
            <div class="des__item--hover-btn">
                <a href="" class="des__item--hover-btn-link">VIEW DESTINATION</a>
            </div>
        </div>
    </div>`
    });

    destination.innerHTML = htmls.join('');
}

function getPackage(callback){
    fetch(apiPackages)
        .then(function (response) {
            return response.json();
        })
        .then(callback)
}

function renderPackages(packgaes){
    const packages= document.querySelector(".packages__list");
    var count = 0;

    var htmls = packgaes.map(function (package){
        count+=1;
        if(count > 3){
            return ;
        }
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
                <a href="../details.html" class="packages__item-description-btn ${package.colorBtn}">DETAILS</a>
            </div>
        </div>
    </div>
        `
    });

    packages.innerHTML = htmls.join('');
}