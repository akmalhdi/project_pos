// // variable : let(paling umum digunakan), var, const
// // php var : $, define, const

// let nama = "Sunandar Sujito";
// var name = "Sumi Sukamti";
// const fullname = "Joko Suminten"; //nilainya tetap, tidak boleh merubah nilai

// // untuk output/print
// // document.write();
// // console.log({
// //     "nama": nama,
// //     "fullname": fullname
// // }); //paling umum menggunakan ini
// // alert();

// // operator
// let angka1 = 10;
// let angka2 = 20;
// console.log(angka1 + angka2);
// console.log(angka1 - angka2);
// console.log(angka1 / angka2);
// console.log(angka1 * angka2);
// console.log(angka1 % angka2);
// console.log(angka1 ** angka2);

// // operator penugasan
// let x = 10;
// x += 5;
// console.log(x);

// // operator pembandingan
// let a = 2;
// let b = 1;
// if (a === b) {
//   console.log("ya");
// } else {
//   console.log("tidak");
// }
// console.log(a > b);
// console.log(a < b);

// // let umur = 20;
// // let p = true;
// // if (umur >= 17 && p) {
// //   console.log("Boleh driving");
// // } else {
// //   console.log("tidak driving");
// // }

// // array
// let buah = ["pisang", "salak", "semangka"];
// console.log("buah dikeranjang:", buah);
// console.log("saya mau buah:", buah[0]);
// buah[1] = "Nanas";
// console.log("buah baru dikeranjang:", buah);
// buah.push("pepaya"); //untuk menambah nilai baru
// console.log("Buah", buah);
// buah.pop(); //untuk menghapus nilai array terakhir
// console.log("buah", buah);

// //
// document.getElementById('product-title').innerHTML = "Data Product";
// // document.querySelector('#product-title');

// // document.querySelector('.category-btn');
// // let btn = document.getElementsByClassName('category-btn');
// // // btn[0].style.color = 'red';
// // console.log("ini button", btn);

// let buttons = document.querySelectorAll('.category-btn');
// // buttons.forEach(function (btn) {});
// buttons.forEach((btn) => {
//     btn.style.color = 'red';
//     console.log(btn);
// });

// let card = document.querySelector('#card');
// let h3 = document.createElement('h3');
// let textH3 = document.createTextNode('Nama Product (dengan createTextNode)');
// h3.textContent = 'Nama Product (dengan textContent)';

// let p = document.createElement("p");
// p.innerText = "apasi ini";
// p.textContent = "ini apasi";

// card.appendChild(textH3)
// card.appendChild(h3);
// card.appendChild(p);

let currentCategory = "all";
function filterCategory(category, event) {
  currentCategory = category;

  let buttons = document.querySelectorAll(".category-btn");
  buttons.forEach((btn) => {
    btn.classList.remove("active");
    btn.classList.remove("btn-primary");
    btn.classList.add("btn-outline-primary");
  });
  event.classList.add("active");
  event.classList.remove("btn-outline-primary");
  event.classList.add("btn-primary");
  console.log({
    currentCategory: currentCategory,
    category: category,
    event: event
  });
  renderProducts();
}

function renderProducts(searchProduct=""){
    const productGrid = document.getElementById("productGrid");
    productGrid.innerHTML = "";
    
    // filter
    const filtered = products.filter((p) => {
        // shorthand
        const matchCategory = currentCategory === "all" || p.category_name === currentCategory;
        const matchSearch = p.product_name.toLowerCase().includes(searchProduct);
        return matchCategory && matchSearch;
    });


    // munculin data dari table product
    filtered.forEach((product) => {
      const col = document.createElement("div");
      col.className = "col-md-4 col-sm-6";
      col.innerHTML = `<div class="card product-card">

            <div class="product-img">
                <img src="../${product.product_photo}" width="100%">
            </div>

            <div class="card-body">
                <span class="badge bg-secondary badge-category">${product.category_name}</span>
                <h6 class="card-title mt-2 mb-2">${product.product_name}</h6>
                <p class="card-text text-primary fw-bold">${product.product_price}</p>
            </div>

        </div>`;
      productGrid.appendChild(col);
    });
}

// DomContentLoaded : akan meload function pertama kali
renderProducts();
document.getElementById("searchProduct").addEventListener("input", function (e) {
    const searchProduct = e.target.value.toLowerCase();
    renderProducts(searchProduct);
});