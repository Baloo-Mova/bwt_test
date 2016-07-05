/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function () {
    $('.datepicker').datepicker({
        format: 'yyyy-mm-dd',
    });
    
    
    $('#registerForm').bootstrapValidator({
        message: 'Это значение не валидно!',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            sureName: {
                message: 'Эта фамилия не валидна',
                validators: {
                    notEmpty: {
                        message: 'Поле имя не может быть пустым'
                    },
                    stringLength: {
                        min: 1,
                        max: 30,
                        message: 'Поле должно содержать от 1 до 30 символов'
                    }, 
                }
            },
            sureName: {
                message: 'Эта фамилия не валидна',
                validators: {
                    notEmpty: {
                        message: 'Поле имя не может быть пустым'
                    },
                    stringLength: {
                        min: 1,
                        max: 30,
                        message: 'Поле должно содержать от 1 до 30 символов'
                    }, 
                }
            },
            password: {
                message: 'Этот пароль не валиден',
                validators: {
                    notEmpty: {
                        message: 'Поле пароль не может быть пустым'
                    },
                    stringLength: {
                        min: 5,
                        max: 30,
                        message: 'Поле должно содержать от 5 до 30 символов'
                    }, 
                }
            },
            email: {
                validators: {
                    notEmpty: {
                        message: 'Поле не может быть пустым'
                    },
                    emailAddress: {
                        message: 'Не верно введен Email'
                    }
                }
            }
        }
    });
});
