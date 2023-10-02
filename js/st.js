"use strict";

// let ar = [7, 4.6, 22];
// ar.push(1);
// alert(ar[ar.length-1]);
// alert(ar.sort(compareNums));

// function compareNums(a, b){
//     return a - b;
// }

// let arr = [ [1, 2, 3],
//             [4, 5, 6],
//             [7, 8, 9], ]

// for(let i = 0; i < arr.length; i++){
//     for(let j = 0; j < arr[i].length; j++){
//         console.log(arr[i][j])
//     }
// }

// let styles = ['jazz', 'blues'];
// styles.push('rock-n-roll');
// styles[Math.floor(styles.length/2)] = 'classic';
// alert(styles.shift());
// styles.unshift('reggie');
// styles.unshift('rap');
// alert(styles);



// let numbers = [];
// for(;;){
//     var num = Number(prompt('enter new number:'));
//     if(!isNaN(num)){
//         numbers.push(num);
//     }
//     else{
//         if (numbers.length != 0) {
//             var sum = 0;
//             for (let i = 0; i < numbers.length; i++) {
//                 sum += numbers[i];
//             }
//             alert(sum);
//         }
//         break;
//     }
// }

// let arrrrrrr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];


// // //.1
// for (let i = 0; i < arrrrrrr.length; i++) {
//     console.log(`${arrrrrrr[i]} * ${arrrrrrr[arrrrrrr.length-(i+1)]} = ${arrrrrrr[i] * arrrrrrr[arrrrrrr.length-(i+1)]}`);
// }

// //.2

// let arr51 = [];

// for (let i = 0; i < arr.length; i++) {
//     var ar = [];
//     for (let j = 0; j < arr[i].length; j++) {
//         ar.push(arr[i][j]*arr[i].length);
//     }
//     arr51.push(ar);
// }
// console.log(arr51);




// let matrix = [  [ 1,  2,  3,  4],
//                 [ 5,  6,  7,  8],
//                 [ 9, 10, 11, 12],
//                 [13, 14, 15, 16]   ]


// let array = [ [1, 2, 3],
//               [4, 5, 6],
//               [7, 8, 9], ];

// //a
// let lengths = [];
// for (let index = 0; index < array.length; index++) {
//         lengths.push(array[index].length);
// }
// console.log(lengths);

// //b
// let mainDiagonal = 1;
// let sideDiagonal = 1;

// for(let i = 0; i < array.length; i++){
//     mainDiagonal *= array[i][i];
// }
// console.log(mainDiagonal);

// for(let i = 0; i < array.length; i++){
//     sideDiagonal *= array[i][array.length - i - 1];
// }
// console.log(sideDiagonal);

// //c

// let arr1 = [];

// for (let i = 0; i < array.length; i++) {
//     var mult = 1;
//     for(let j = 0; j < array[i].length; j++){
//         mult *= array[i][j];
//     }
//     arr1.push(mult);
// }
// console.log(arr1);

// //d
// let arr2 = [];
// for(let j = 0; j < array.length; j++){
//     let mult = 1;
//     for (let i = 0; i < array.length; i++) {
//         mult *= array[i][j];        
//     }
//     arr2.push(mult);
// }
// console.log(arr2);

//eeeeeeee

// let t = new Date().getDate()
// console.log(t);

// let arr = ['1', 'Vano', 4];
// delete arr[1];
// console.log(arr);
// arr.splice(1, 1);
// console.log(arr);

// arr.splice(1, 0, "6456", "17");
// console.log(arr);

// let res;
// res = arr.slice(1, 3);
// console.log(res);
// res = arr.slice(-2);
// console.log(res);
// res = res.concat(res, 5, 7, "ert");
// console.log(res);
// console.log(res.indexOf(4));
// console.log(res.indexOf(434234));
// console.log(res.lastIndexOf(4));

// //1

// let a = ["Петя", "Вася", "Жора"];
// let b = ["Аня", "Катя", "Инна"];

// console.log("Изначальные списки:");
// console.log(a);
// console.log(b);

// let c = a.concat(b);

// hasInArray("Катя");
// hasInArray("Евгений");

// function hasInArray(value){
//     if(c.includes(value)){
//         console.log(`${value} в списке присутствует`);
//     }
//     else{
//         console.log(`${value} в списке отсутствует`);
//     }
// }


// c.splice(c.indexOf("Вася"), 1);
// c.splice(c.indexOf("Инна"), 1);
// console.log(c);

// c.splice(c.indexOf("Петя")+1, 0, "Георгий");
// console.log(c);

// arr = ['pyhon', 'java', 'c++', 'c', 'pascal', 'c#', 'js', 'fortran', 'php', 'assembler', 'rust', 'ruby', 'go', 'jquery', '1c', 'sql']

// for (let index = 0; index < arr.length; index++) {
//     if (index != 4 && index != 13 && index != 14) {
//         console.log(arr[index]);
//     }
// }

// let s = "";
// for(let i = 0; i < array.length; i++){
//     for (let h = 0; h < array[i].length; h++) {
//         s += `${array[i][h]}`;
//         if(i!=array.length-1 || h!=array.length-1){
//             s+=";";
//         }
//     }
// }

// console.log(s);

let m5 = [  [ 1,  2,  3,  4,  5],
            [ 6,  7,  8,  9, 10],
            [11, 12, 13, 14, 15],
            [16, 17, 18, 19, 20],
            [21, 22, 23, 24, 25] ]

function detOfMatrix(matrix){
    console.log(matrix);
    let det = 0;
    if(matrix.length == 2){
        det = matrix[0][0] * matrix[1][1] - matrix[0][1] * matrix[1][0];
    }
    else {
        let isPositive = true;
        let sums = [];
        for (let column = 0; column < matrix.length; column++) {
            let newSumEl = matrix[0][column] * detOfMatrix(lowerMatrix(matrix, 0, column));
            if (!isPositive) {
                newSumEl *= -1;
            }
            sums.push(newSumEl);
            isPositive = !isPositive;
        }

        for (let i = 0; i < sums.length; i++) {
            det += sums[i];
        }
    }
    return det;
}

function lowerMatrix(matrix, i, j){
    let newMatrix = [];
    for(let row = 0; row < matrix.length; row++){
        let newRow = [];
        if(row != i){
            for(let column = 0; column < matrix.length; column++){
                if(column != j){
                    newRow.push(matrix[row][column]);
                }
            }
        }
        if(newRow.length != 0){
            newMatrix.push(newRow);
        }
    }
    return newMatrix;
}

let array3 = [  [1, 5, 3],
                [7, 5, 6],
                [7, 8, 5] ];

// console.log(detOfMatrix(m5));


// let mysql = require('mysql2');

// const connection = mysql.createConnection({
//     host: "localhost",
//     user: "root",
//     database: "site",
//     password: "0209"
// });

// connection.connect(function (err) {
//     if (err) {
//         return console.error("Ошибка: " + err.message);
//     }
//     else {
//         console.log("Подключение к серверу MySQL успешно установлено");
//     }
// });


function checkName() {
    if (document.getElementById("nameIF").value == "Admin") {
        let pwd = document.getElementById("pwdIF").value;
        if (pwd == "Admin") {

            var fReader = new FileReader();
            try {
                fReader.readAsDataURL(document.getElementById("imgIF").files[0])
                fReader.onloadend = function (event) {
                    var avatar = document.getElementById("avatar");
                    avatar.src = event.target.result;
                    avatar.style.width = avatar.style.height = "200px"
                }
            }
            catch { }

            document.getElementById("Autorisation").hidden = true;
            document.getElementById("Welcome").hidden = false;
        }
        else {
            document.getElementById("F*ck you").hidden = false;
            document.getElementById("Wrong name").hidden = true;
        }
    }
    else {
        document.getElementById("F*ck you").hidden = true;
        document.getElementById("Wrong name").hidden = false;
    }
}

function addImage(){    
    var list = document.getElementById("Collection");

    var fReader = new FileReader();
    fReader.readAsDataURL(document.getElementById("imgIF").files[0]);

    fReader.onloadend = function(event){
        var li = document.createElement(`LI`);
        var src = event.target.result;
        var img = document.createElement(`IMG`);
        img.src = src;
        img.classList.add("galleryimage");
        li.appendChild(img);
        list.appendChild(li);
    }
}

function x(){
    var x = Number(document.getElementById("valueIF").value);
    document.getElementById("text").innerText = 
    `${x}^2 = ${x*x}
    ${x}^3 = ${x*x*x}`;
}


let enum_colors = { 1: ["#ff0000", "12px"],
                    2: ["#00ff00", "16px"],
                    3: ["#0000ff", "14px"] };

let size = 12;
// document.getElementById("a").style.fontSize = `${size}px`;

function reduceFontSize() {
    if(size > 8){
        size--;
    }
    document.getElementById("a").style.fontSize = `${size}px`;
}

function increaseFontSize() {
    if(size < 16){
        size++;
    }
    document.getElementById("a").style.fontSize = `${size}px`;
}

let colorID = 0;

function ChangeBgColor(){

    let colorsArr = ["#ff0000", "#00ff00", "#0000ff"];
    if (colorID < colorsArr.length-1) {
        colorID++;
    } else {
        colorID = 0;
    }
    document.getElementById("a").style.background = colorsArr[colorID];
    document.getElementById("ChangeBgColorButton").style.background = colorsArr[colorID];
}

function ChangeBgColorAndSize(){
    
    if (colorID < Object.keys(enum_colors).length) {
        colorID++;
    } else {
        colorID = 1;
    }    

    document.getElementById("a").style.fontSize = enum_colors[colorID][1];    
    document.getElementById("a").style.background = enum_colors[colorID][0];
}

function ChangeRGBvalues(num, value){
    let str = document.getElementById("a").style.backgroundColor;
    str = str.slice(4, 11);
    let rgb = str.split(',');
    for (let i = 0; i < rgb.length; i++) {
        rgb[i] = Number(rgb[i]);
    }
    rgb[num]+=value;
    str = `rgb(${rgb[0]}, ${rgb[1]}, ${rgb[2]})`
    document.getElementById("a").style.backgroundColor = str;
    console.log(rgb + "    " + document.getElementById("a").style.backgroundColor +
                "    " + (str === document.getElementById("a").style.backgroundColor))
} 





// const mysql = require("mysql2");

// const conn = mysql.createConnection({
//     host: "localhost",
//     user: "root",
//     database: "site",
//     password: "0209"
// });

// conn.connect(function(err){
//     if(err){
//         return console.log("No");
//     }
//     else{
//         console.log("Ok")
//     }
// })   


// npm install --save mysql2


