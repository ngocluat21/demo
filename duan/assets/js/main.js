// Minus & Plus amount
// Button plus - minus
let amountElement = document.getElementById('amount');
let amount = amountElement.value;
let render = (amount) => {
    amountElement.value = amount;
}
// Handle Plus
let handlePlus = () => {
    amount++;
    render(amount);
}

// Handle Minus
let handleMinus = () => {
    if (amount > 1)
        amount --;
    render(amount);
}

amountElement.addEventListener('input', () => {
    amount = amountElement.value;
    amount = parseInt(amount);
    amount = (isNaN(amount)||amount==0)?1:amount;
    render(amount);
}); 

// Sản phẩm biến thể
// let variantCount = 1;

// function createVariantInput() {
//     return `
//         <div class="variant">
//             <select name="" id="">
//                 <option value=""></option>
//             </select>
//             <select name="" id="">
//                 <option value=""></option>
//             </select>
//             <input type="number" name="soluong" placeholder="Giá biến thể" required>
//         </div>
//     `;
// }

// function addVariant() {
//     const variantContainer = document.getElementById('variant_container');
//     const variantDiv = document.createElement('div');
//     variantDiv.className = 'variant';
//     variantDiv.innerHTML = createVariantInput();

//     variantContainer.appendChild(variantDiv);
// }

// Hàm thêm biến thể mới
// function addVariant() {
//     var variantsContainer = document.getElementById('variantsContainer');
//     var newVariant = document.querySelector('.variant').cloneNode(true);
//     variantsContainer.appendChild(newVariant);
// }
// function removeVariant(input) {
//     var variant = input.parentNode;
//     variant.parentNode.removeChild(variant);
// }
// function removeVariant(button) {
//     var variantsContainer = document.getElementById('variantsContainer');
//     var variant = button.parentNode;
//     variantsContainer.removeChild(variant);
// }
// Hàm thêm biến thể mới
function addVariant() {
    var variantsContainer = document.getElementById('variantsContainer');
    var newVariant = document.querySelector('.variant').cloneNode(true);
    variantsContainer.appendChild(newVariant);
}

// Hàm xóa biến thể
function removeVariant(element) {
    var variantsContainer = document.getElementById('variantsContainer');
    variantsContainer.removeChild(element.parentNode);
}
{/* <div class="mb10">
<input type="button" onclick="removeVariant(this)" value="Xóa">
</div> */}