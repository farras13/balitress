<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Cards with Pagination</title>
    <style>
        .card {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
<div class="container mt-4">
    <div id="card-container" class="row">
        <!-- Cards will be injected here by JavaScript -->
    </div>
    <nav>
        <ul class="pagination justify-content-center">
            <li class="page-item"><a class="page-link" href="#" id="prev-page">Previous</a></li>
            <li class="page-item"><a class="page-link" href="#" id="next-page">Next</a></li>
        </ul>
    </nav>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function(){
        const itemsPerPage = 4;
        let currentPage = 1;
        const cardsData = [
            {title: 'Card 1', text: 'This is the first card.'},
            {title: 'Card 2', text: 'This is the second card.'},
            {title: 'Card 3', text: 'This is the third card.'},
            {title: 'Card 4', text: 'This is the fourth card.'},
            {title: 'Card 5', text: 'This is the fifth card.'},
            {title: 'Card 6', text: 'This is the sixth card.'},
            {title: 'Card 7', text: 'This is the seventh card.'},
            {title: 'Card 8', text: 'This is the eighth card.'}
        ];

        function renderCards(page) {
            $('#card-container').empty();
            const start = (page - 1) * itemsPerPage;
            const end = start + itemsPerPage;
            const paginatedItems = cardsData.slice(start, end);
            
            for (const item of paginatedItems) {
                $('#card-container').append(`
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">${item.title}</h5>
                                <p class="card-text">${item.text}</p>
                            </div>
                        </div>
                    </div>
                `);
            }
        }

        function updatePaginationButtons() {
            $('#prev-page').parent().toggleClass('disabled', currentPage === 1);
            $('#next-page').parent().toggleClass('disabled', currentPage * itemsPerPage >= cardsData.length);
        }

        $('#prev-page').click(function(e) {
            e.preventDefault();
            if (currentPage > 1) {
                currentPage--;
                renderCards(currentPage);
                updatePaginationButtons();
            }
        });

        $('#next-page').click(function(e) {
            e.preventDefault();
            if (currentPage * itemsPerPage < cardsData.length) {
                currentPage++;
                renderCards(currentPage);
                updatePaginationButtons();
            }
        });

        // Initial render
        renderCards(currentPage);
        updatePaginationButtons();
    });
</script>
</body>
</html>
