<nav id="nav" class="flex flex-wrap items-start lg:items-center justify-between bg-brand-main w-full h-full relative">
    <div class="flex flex-wrap lg:flex-col lg:px-12 2xl:container 2xl:mx-auto items-center w-full h-full">
        <div class="absolute inset-0 bg-brand-main w-full h-full visible lg:invisible pointer-events-none"></div>

        <div class="flex h-full items-center w-1/2 lg:w-1/5 ml-4 z-20">
            <?php get_template_part('parts/brand') ?>
        </div>

        <button @click="toggle" :class="[menuOpen ? 'shadow-brand-black shadow-inner' : 'shadow-gray-700 shadow']" class="pointer-events-auto relative self-center ml-auto bg-transparent mr-4 lg:hidden flex items-center justify-center h-10 w-10 rounded outline-none focus:outline-none z-20">
            <svg xmlns="http://www.w3.org/2000/svg" :class="[!menuOpen ? 'flex' : 'hidden']" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" :class="[menuOpen ? 'flex' : 'hidden']" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>

        <div :class="[menuOpen ? 'translate-y-0 bg-brand-black lg:bg-transparent h-[100vh] lg:h-full -z-10 lg:z-20 visible' : 'bg-brand-main lg:bg-transparent -translate-y-[100vh] h-full z-20 invisible lg:visible']" 
        class="flex w-full lg:w-4/5 pointer-events-auto transform transition-transform-height duration-300 lg:duration-0 lg:translate-y-0 lg:transition-none lg:justify-end">
            <?php webokstarter_nav(); ?>
        </div>
        
    </div>
</nav>