import './bootstrap';
import '~resources/scss/app.scss'
import * as bootstrap from 'bootstrap'
import.meta.glob([
    '../img/**'
])

//lordicon
import lottie from "lottie-web";
import { defineElement } from "@lordicon/element";

defineElement(lottie.loadAnimation);


const prova = document.getElementById('screen');
const preview = document.getElementById('thumb');

prova.addEventListener('change', function () {
    console.log(prova.value);
    preview.src = prova.value;
})