const axios = require('axios').default;

/******/ (() => {
    // webpackBootstrap
    /******/ 'use strict';
    /******/
    /******/
    /******/
})();

window.deleteSwal = (url) => {
    Swal.fire({
        title: 'Deseja realmente realizar essa transação?',
        text: 'Essa transação não pode retroceder!',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Sim',
    })
        .then((result) => {
            if (result.isConfirmed) {
                window.location = url;
            }
        })
        .catch(($error) => console.log($error));
};

window.saveComment = (route, postId) => {
    axios
        .post(route)
        .then(function (response) {
            window.location = route;
        })
        .catch(function (error) {
            console.log(route, postId);
            console.log(error);
        });
};
