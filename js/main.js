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
            name: {
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
    
    $('#loginForm').bootstrapValidator({
        message: 'Это значение не валидно!',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            email: {
                message: 'Email не валиден',
                validators: {
                    notEmpty: {
                        message: 'Поле имя не может быть пустым'
                    },
                    emailAddress: {
                        message: 'Не верно введен Email'
                    }
                }
            }, 
            password: {
                message: 'Этот пароль не валиден',
                validators: {
                    notEmpty: {
                        message: 'Поле пароль не может быть пустым'
                    }, 
                }
            }, 
        }
    });
    $('#feedbackform').bootstrapValidator({
        message: 'Это значение не валидно!',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            captcha:{
                message:"Нужно ввести Captch-y",
                validators:{
                    notEmpty:{
                        message: 'Поле не может быть пустым'
                    }
                }
            },
            email: {
                message: 'Email не валиден',
                validators: {
                    notEmpty: {
                        message: 'Поле имя не может быть пустым'
                    },
                    emailAddress: {
                        message: 'Не верно введен Email'
                    },
                    stringLength: { 
                        max: 50,
                        message: 'Поле должно содержать до 50 символов'
                    }, 
                }
            }, 
            name: {
                message: 'Этот пароль не валиден',
                validators: {
                    notEmpty: {
                        message: 'Поле имя не может быть пустым'
                    }, 
                    stringLength: { 
                        max: 40,
                        message: 'Поле должно содержать до 40 символов'
                    }, 
                }
            }, 
            message: {
                message: 'Этот пароль не валиден',
                validators: {
                    notEmpty: {
                        message: 'Поле сообщение не может быть пустым'
                    }, 
                }
            },
        }
    });
});
