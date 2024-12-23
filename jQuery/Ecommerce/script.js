$(document).ready(function() {
    const product = [
        {
            id: 0,
            image: 'https://sm.ign.com/t/ign_za/news/s/samsung-in/samsung-introduces-the-galaxy-z-flip-foldable-phone_pv2t.1200.jpg',
            title: 'Z Flip Foldable Mobile',
            price: 120,
        },
        {
            id: 1,
            image: 'https://cdn.i-scmp.com/sites/default/files/d8/images/methode/2019/11/01/fca6da0e-fc77-11e9-acf9-cafedce87d15_image_hires_154757.jpg',
            title: 'Air Pods Pro',
            price: 60,
        },
        {
            id: 2,
            image: 'https://th.bing.com/th/id/OIP.Rc-SJLpnX4CiDStOvDGjcgHaGR?rs=1&pid=ImgDetMain',
            title: '250D DSLR Camera',
            price: 230,
        },
        {
            id: 3,
            image: 'https://th.bing.com/th/id/OIP.a6qg5YqCQAj-22E7E75XdAAAAA?rs=1&pid=ImgDetMain',
            title: 'Head Phones',
            price: 100,
        }
    ];

    const categories = [...new Set(product.map(item => item))];
    let i = 0;
    let cart = [];

    function renderProducts() {
        const productHTML = categories.map(item => {
            const { image, title, price } = item;
            return (
                `<div class='box'>
                    <div class='img-box'>
                        <img class='images' src='${image}' alt='${title}'>
                    </div>
                    <div class='bottom'>
                        <p>${title}</p>
                        <h2>$ ${price}.00</h2>
                        <button onclick='addtocart(${i++})'>Add to cart</button>
                    </div>
                </div>`
            );
        }).join('');
        $('#root').html(productHTML);
    }

    window.addtocart = function(a) {
        cart.push({ ...categories[a] });
        displaycart();
    };

    window.delElement = function(a) {
        cart.splice(a, 1);
        displaycart();
    };

    function displaycart() {
        let total = 0;
        $('#count').text(cart.length);
        if (cart.length === 0) {
            $('#cartItem').html("Your cart is empty");
            $('#total').text("$ 0.00");
        } else {
            const cartHTML = cart.map((items, index) => {
                const { image, title, price } = items;
                total += price;
                return (
                    `<div class='cart-item'>
                        <div class='row-img'>
                            <img class='rowimg' src='${image}' alt='${title}'>
                        </div>
                        <p style='font-size:12px;'>${title}</p>
                        <h2 style='font-size: 15px;'>$ ${price}.00</h2>
                        <i class='fa-solid fa-trash' onclick='delElement(${index})'></i>
                    </div>`
                );
            }).join('');
            $('#cartItem').html(cartHTML);
            $('#total').text(`$ ${total}.00`);
        }
    }

    renderProducts();
});
