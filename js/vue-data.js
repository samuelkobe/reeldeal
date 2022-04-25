Vue.createApp({
    data() {
        return {
            menuOpen: false,
            view: {
                atTopOfPage: true
            }
        }
    },
    // a beforeMount call to add a listener to the window
    beforeMount () {
        window.addEventListener('scroll', this.handleScroll);
    },
    methods: {
        toggle() {
            this.menuOpen = !this.menuOpen
        },
        // the function to call when the user scrolls, added as a method
        handleScroll(){
            // when the user scrolls, check the pageYOffset
            if(window.pageYOffset>0){
                // user is scrolled
                if(this.view.atTopOfPage) this.view.atTopOfPage = false
            } else {
                // user is at top of page
                if(!this.view.atTopOfPage) this.view.atTopOfPage = true
            }
        }
    }
}).mount('#app')