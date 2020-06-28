const products = [
    {id: 1,title: 'erys black hoodie', price: 450, qty: 1, image: 'product/08.png'},  
    {id: 2,title: 'misfit red hoodie',price: 350, qty: 1,image: 'product/13.jpg'},  
    {id: 3,title: 'misfit black hoodie',price: 350,qty: 1,image: 'product/14.jpg'},  
    {id: 4,title: 'erys pink hoodie',price: 400, qty: 1, image: 'product/11.jpg'},
    {id: 5,title: 'trippy summer blue hoodie',price: 400, qty: 1, image: 'product/12.jpg'},
    {id: 6,title: 'misfit electric hoodie',price: 450, qty: 1, image: 'product/15.jpg'}, 
    {id: 7,title: 'trippy summer hippy', price: 300, qty: 1, image: 'product/18.jpg'},  
    {id: 8,title: 'trippy electric t-shirt',price: 300, qty: 1,image: 'product/26.jpg'},  
    {id: 9,title: 'trippy plain',price: 250,qty: 1,image: 'product/19.png'},  
    {id: 10,title: 'misfit one world pink',price: 250, qty: 1, image: 'product/22.jpg'},
    {id: 11,title: 'misfit one world black',price: 200, qty: 1, image: 'product/24.jpg'},
    {id: 12,title: 'misfit one world white',price: 200, qty: 1, image: 'product/23.jpg'},
];

// The shopping cart component
Vue.component('shopping-cart', {
    props: ['items'],

    computed: 
    {
        Total() 
        {
            let total = 0;
            this.items.forEach(item => {
            total += (item.price * item.qty);
        });
        return total;
    }
},

methods: 
{
    // Remove item by its index
    removeItem(index) 
    {
       this.items.splice(index, 1)
    }
}
})

const vm = new Vue
({
    el: '#app',
    data: 
    {
        cartItems: [],
        items : products
    },
        
    methods: 
    {
        // Add Items to cart
        addToCart(itemToAdd) 
        {
            let found = false;

            // Add the item or increase qty
            let itemInCart = this.cartItems.filter(item => item.id===itemToAdd.id);
            let isItemInCart = itemInCart.length > 0;

            if (isItemInCart === false) 
            {
                this.cartItems.push(Vue.util.extend({}, itemToAdd));
            } 
            else
            {
                itemInCart[0].qty += itemToAdd.qty;
            }

            itemToAdd.qty = 1;
        }
    }
})