let items = [];

function addItem() {
  const item = document.getElementById("item").value;
  const quantity = parseInt(document.getElementById("quantity").value);
  const price = parseFloat(document.getElementById("price").value);

  items.push({
    item: item,
    quantity: quantity,
    price: price
  });

  generateBill();
}

function generateBill() {
  const billTable = document.getElementById("billTable");
  billTable.innerHTML = "";

  let totalAmount = 0;

  items.forEach(item => {
    const amount = item.quantity * item.price;
    totalAmount += amount;

    const row = document.createElement("tr");
    const itemCell = document.createElement("td");
    itemCell.innerText = item.item;
    row.appendChild(itemCell);

    const quantityCell = document.createElement("td");
    quantityCell.innerText = item.quantity;
    row.appendChild(quantityCell);

    const priceCell = document.createElement("td");
    priceCell.innerText = item.price;
    row.appendChild(priceCell);

    const amountCell = document.createElement("td");
    amountCell.innerText = amount;
    row.appendChild(amountCell);

    billTable.appendChild(row);
  });

  document.getElementById("totalAmount").innerText = totalAmount;
}
