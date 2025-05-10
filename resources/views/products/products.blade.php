<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de produtos</title>


</head>
<body>

    <ul id='product-list'>
    </ul>

    <script>

    async function loadProducts() {
        try {
            const response = await fetch('http://localhost/api/produtos');
            const products = await response.json();

            const productList = document.getElementById('product-list');

            products.forEach(product => {
                const listItem = document.createElement('li');
                listItem.innerHTML = `
                <h2>${product.name}</h2>
                <p>${product.description}</p>
                <p>Price: R$${product.price}</p>
                `;
                productList.appendChild(listItem);
            });
        } catch (error) {
            console.error('Error fetching products:', error);
        }
    }

    loadProducts();

    </script>
</body>
</html>
