function nextpg(){
    window.location.href="cal.html";
}




document.addEventListener("DOMContentLoaded", function() {
    const loader = document.getElementById("loader");
    const reviewSection = document.querySelector(".review");

    const reviews = [
        {
            name: "Selvan",
            profession: "Customer",
            review: "Amazing product! Loved the quality and craftsmanship."
        },
        {
            name: "Anu",
            profession: "Vendor",
            review: "Good quality"
        },
        {
            name: "Vijay",
            profession: "Vendor",
            review: "GOOD PACKING AND TRANSPARENT BILLING"
        },
        {
            name: "Sumathi",
            profession: "Customer",
            review: "5-star quality"
        },
        {
            name: "Smith",
            profession: "Vendor",
            review: "Good"
        }
    ];

    const nameElem = document.getElementById("name");
    const professionElem = document.getElementById("profession");
    const reviewElem = document.getElementById("review");
    const backwardBtn = document.getElementById("backward");
    const forwardBtn = document.getElementById("forward");

    let currentIndex = 0;

    function showReview(index) {
        const review = reviews[index];
        if (review) {
            loader.style.display = "none";
            reviewSection.style.display = "block";
            nameElem.textContent = review.name;
            professionElem.textContent = review.profession;
            reviewElem.textContent = review.review;
        }
    }

    showReview(currentIndex);

    backwardBtn.addEventListener("click", function() {
        currentIndex--;
        if (currentIndex < 0) {
            currentIndex = reviews.length - 1;
        }
        showReview(currentIndex);
    });

    forwardBtn.addEventListener("click", function() {
        currentIndex++;
        if (currentIndex >= reviews.length) {
            currentIndex = 0;
        }
        showReview(currentIndex);
    });
    
});document.addEventListener('DOMContentLoaded', function() {
    const faqItems = document.querySelectorAll('.faq-item');

    faqItems.forEach(item => {
        const question = item.querySelector('.faq-question');
        const answer = item.querySelector('.faq-answer');
        const toggle = question.querySelector('.faq-toggle');

        question.addEventListener('click', () => {
            const isOpen = answer.style.display === 'block';
            
            // Close all answers
            faqItems.forEach(item => {
                item.querySelector('.faq-answer').style.display = 'none';
                item.querySelector('.faq-toggle').textContent = '+';
            });

            // Toggle current answer
            if (!isOpen) {
                answer.style.display = 'block';
                toggle.textContent = '-';
            } else {
                answer.style.display = 'none';
                toggle.textContent = '+';
            }
        });
    });
});
