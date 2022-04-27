
const api = "http://localhost:3000/packages";

function start(){
    getPackage(function(packages){
        renderlist1(packages);
    });
    getPackage(function(packages){
        renderlist2(packages);
    });
    getPackage(function(packages){
        renderDetails(packages);
    });
}

start()

function getPackage(callback){
    fetch(api)
        .then(function (response) {
            return response.json();
        })
        .then(callback)
}


function renderlist1(packages){
    const packageList1 = document.querySelector(".list-1");

    var htmls = packages.map(function (package, index){
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
                <a href="../details.html" class="packages__item-description-btn ${package.colorBtn}"
                onclick="getId(${package.id})">DETAILS</a>
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
                <a href="../details.html" class="packages__item-description-btn  ${package.colorBtn}">DETAILS</a>
            </div>
        </div>
    </div>`
    });

    packageList2.innerHTML = htmls.join('');
}

var getId = function(id){
    return id;
}


function renderDetails(packages){
    const details = document.querySelector(".container_content");

    var htmls = packages.map(function (package){
        if(package.id == 4){
            return `
            <div class="slider" style="background-image: url('${package.img}');">
                <div class="slider-content content-section">
                    <div class="slider__title">${package.title}</div>
                    <div class="slider__info">
                        <div class="slider__location">
                            <img src="./assets/img/details/icon-pin-white.png" alt="" class="slider__location-icon">
                            <h2 class="slider__location-name">${package.location}</h2>
                        </div>
                        <div class="slider__location">
                            <img src="./assets/img/details/icon-time-white.png" alt="" class="slider__location-icon">
                            <h2 class="slider__location-name">3 - 6 days</h2>
                        </div>
                    </div>
                </div>
            </div>
        
            <div class="content content-section">
                <div class="introduce col-lg-8">
                    <div class="introduce__type">
                        <div class="introduce__type-item">
                            <img src="./assets/img/details/icon-typologies-greydark.png" alt="" class="introduce__type-img">
                            <div class="introduce__type-info">
                                <h1 class="introduce__type-name">TYPOLOGIES</h1>
                                <h3 class="introduce__type-">Cultural</h3>
                            </div>
                        </div>
                        <div class="introduce__type-item">
                            <img src="./assets/img/details/icon-battery-greydark.png" alt="" class="introduce__type-img">
                            <div class="introduce__type-info">
                                <h1 class="introduce__type-name">DIFFICULTY</h1>
                                <h3 class="introduce__type-">Medium</h3>
                            </div>
                        </div>
                        <div class="introduce__type-item">
                            <img src="./assets/img/details/icon-minage-greydark.png" alt="" class="introduce__type-img">
                            <div class="introduce__type-info">
                                <h1 class="introduce__type-name">MIN. AGE</h1>
                                <h3 class="introduce__type-">3 years</h3>
                            </div>
                        </div>
                    </div>
                    <img src="${package.img}" alt="" class="introduce__img">
                    <div class="introduce__list">
                        <ul class="introduce__list-title">
                            <li><a href="" class="introduce__list-item active">Description</a></li>
                            <li><a href="" class="introduce__list-item">Map</a></li>
                            <li><a href="" class="introduce__list-item">Photo</a></li>
                            <li><a href="" class="introduce__list-item">Program</a></li>
                        </ul>
                    </div>
                    <div class="introduce__type-content">
                        <h1 class="introduce__content-name">Amazing Experience</h1>
                        <div class="space"></div>
                        <p class="introduce__content-pag">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ut venenatis lorem. Nunc sodales interdum rhoncus. 
                            Nulla a leo finibus, ullamcorper lorem vel, scelerisque massa. Vivamus leo dui, interdum non fermentum eget, laoreet ac lorem. 
                            Aliquam a ultricies nisl. Nulla consequat lobortis urna sed cursus.
                        </p>
                        <br>
                        <p class="introduce__content-pag">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                            Curabitur ut venenatis lorem. Nunc sodales interdum rhoncus. 
                            Nulla a leo finibus, ullamcorper lorem vel, scelerisque massa. 
                            Vivamus leo dui, interdum non fermentum eget, laoreet ac lorem.
                            Aliquam a ultricies nisl. Nulla consequat lobortis urna sed cursus.
                        </p>
                    </div>
        
                </div>
        
                <div class="feedback-section col-lg-4">
                    <div class="feedback__name">${package.newPrice}</div>
                    <div class="feedback__input">
                        <div class="feedback__input-container">
                            <input type="text" class="feedback__input-info" placeholder="Name" name="name">
                            <input type="text" class="feedback__input-info" placeholder="Surname" name="surname">
                            <input type="email" placeholder="Email" name="email" class="feedback__input-info">
                            <input type="text" placeholder="Phone" name="phone" class="feedback__input-info">
                            <textarea name="message" id="" cols="30" rows="10" placeholder="Message" class="feedback__input-info"></textarea>
                        </div>
                        <button class="feedback__input-btn">Send now</button>
                    </div>
                </div>
            </div>
            `
        }
    });

    details.innerHTML = htmls.join('');
}


