"use strict";

//объявление переменных
var btn = document.querySelector('.user');
var blockHidden = document.querySelector('.authoriz');
var btnClose = document.querySelector('.close-bt');
var btnClose2 = document.querySelector('.close-bt_2');
var toRegister = document.querySelector('.register');
var closelogin = document.querySelector('.text-to-register');
var closereg = document.querySelector('.text-to-login');

function showBlock() {
  blockHidden.classList.add('up');
}

function showBlock2() {
  toRegister.classList.add('upreg');
}

function hideBlock() {
  blockHidden.classList.remove('up');
}

function hideBlock2() {
  toRegister.classList.remove('upreg');
}

btnClose.addEventListener('click', hideBlock);
btnClose2.addEventListener('click', hideBlock2);
closelogin.addEventListener('click', hideBlock);
closelogin.addEventListener('click', showBlock2);
closereg.addEventListener('click', hideBlock2);
closereg.addEventListener('click', showBlock);
btn.addEventListener('click', showBlock);