<!-- resources/views/faq.blade.php -->
<section id="faq" class="py-12 bg-amber-50">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Section Title -->
        <div class="text-center mb-12" data-aos="fade-up">
            <h2 class="text-4xl font-bold text-orange-400">Frequently Asked Questions</h2>
            <div class="flex justify-center mt-4">
                <div class="w-12 border-b-2 border-gray-300"></div>
                <div class="w-12 border-b-4 border-orange-400"></div>
                <div class="w-12 border-b-2 border-gray-300"></div>
            </div>
            <p class="text-gray-600 mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum vestibulum.</p>
        </div>

        <div class="max-w-3xl mx-auto">
            <div class="faq-list space-y-6">
                <!-- FAQ 1 -->
<div id="faq-item-1" class="faq-item bg-white p-6 rounded-lg shadow-md transition-transform duration-300 transform hover:scale-105 border-2">
    <button class="w-full text-left focus:outline-none" onclick="toggleFaq(1)">
        <div class="flex items-center space-x-4">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 5.25h.008v.008H12v-.008Z" />
            </svg>
            <h3 class="text-lg font-semibold text-gray-800 flex-grow">Lorem ipsum dolor sit amet?</h3>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 transition-transform transform" id="icon-1" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M10 5a1 1 0 00-.707.293l-5 5a1 1 0 101.414 1.414L10 7.414l4.293 4.293a1 1 0 001.414-1.414l-5-5A1 1 0 0010 5z" clip-rule="evenodd" />
            </svg>
        </div>
    </button>
    <div id="faq-content-1" class="faq-content mt-4 text-gray-600 hidden">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam viverra convallis lectus, sit amet facilisis nisi ullamcorper at.</p>
    </div>
</div>

<!-- FAQ 2 -->
<div id="faq-item-2" class="faq-item bg-white p-6 rounded-lg shadow-md transition-transform duration-300 transform hover:scale-105 border-2">
    <button class="w-full text-left focus:outline-none" onclick="toggleFaq(2)">
        <div class="flex items-center space-x-4">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 5.25h.008v.008H12v-.008Z" />
            </svg>
            <h3 class="text-lg font-semibold text-gray-800 flex-grow">Vivamus lacinia odio vitae vestibulum?</h3>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 transition-transform transform" id="icon-2" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M10 5a1 1 0 00-.707.293l-5 5a1 1 0 101.414 1.414L10 7.414l4.293 4.293a1 1 0 001.414-1.414l-5-5A1 1 0 0010 5z" clip-rule="evenodd" />
            </svg>
        </div>
    </button>
    <div id="faq-content-2" class="faq-content mt-4 text-gray-600 hidden">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus distinctio iure hic inventore sunt nemo quas autem, dolorem et quos, nihil, laudantium in? Explicabo modi mollitia alias fugiat pariatur rem!</p>
    </div>
</div>

<!-- FAQ 3 -->
<div id="faq-item-3" class="faq-item bg-white p-6 rounded-lg shadow-md transition-transform duration-300 transform hover:scale-105 border-2">
    <button class="w-full text-left focus:outline-none" onclick="toggleFaq(3)">
        <div class="flex items-center space-x-4">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 5.25h.008v.008H12v-.008Z" />
            </svg>
            <h3 class="text-lg font-semibold text-gray-800 flex-grow">Nullam viverra convallis lectus?</h3>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 transition-transform transform" id="icon-3" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M10 5a1 1 0 00-.707.293l-5 5a1 1 0 101.414 1.414L10 7.414l4.293 4.293a1 1 0 001.414-1.414l-5-5A1 1 0 0010 5z" clip-rule="evenodd" />
            </svg>
        </div>
    </button>
    <div id="faq-content-3" class="faq-content mt-4 text-gray-600 hidden">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam viverra convallis lectus, sit amet facilisis nisi ullamcorper at.</p>
    </div>
</div>

<script>
    function toggleFaq(faqNumber) {
        var content = document.getElementById('faq-content-' + faqNumber);
        var icon = document.getElementById('icon-' + faqNumber);
        var faqItem = document.getElementById('faq-item-' + faqNumber);
        
        // Toggle visibility of the content
        if (content.classList.contains('hidden')) {
            content.classList.remove('hidden');
            icon.classList.add('rotate-180');
            faqItem.classList.add('border-orange-400'); // Menambahkan border orange saat dibuka
        } else {
            content.classList.add('hidden');
            icon.classList.remove('rotate-180');
            faqItem.classList.remove('border-orange-400'); // Menghapus border orange saat ditutup
        }
    }
</script>

            
        </div>
    </div>
</section>


