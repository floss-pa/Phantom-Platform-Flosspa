/*
* logval.js
*
* luis Daniel Mora Delgado @ BlackBohr | @fobos
*
* MIT License
*
* Copyright (c) 2017 Luis Daniel Mora Delgado / Black Bohr | @fobos
*
* Permission is hereby granted, free of charge, to any person obtaining a copy
* of this software and associated documentation files (the "Software"), to deal
* in the Software without restriction, including without limitation the rights
* to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
* copies of the Software, and to permit persons to whom the Software is
* furnished to do so, subject to the following conditions:
*
* The above copyright notice and this permission notice shall be included in all
* copies or substantial portions of the Software.
*
* THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
* IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
* FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
* AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
* LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
* OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
* SOFTWARE.
*
* ----------------------------------------------------------------------------
*                           Phantom Platform
* ----------------------------------------------------------------------------
* This version of Phantom Platform is not yet a full release,
* this version uses Flat UI and some color variations, made by designmodo, please visit:
* http://designmodo.github.io/Flat-UI/ for more information
*
* This version uses PHP 7.0.X, all dependencies are included, this version doesn't use composer
* or any package manager for php, although it can be used in PHP 5.0.X but beware of some functions
* that may doesn't exist on PHP 5 or viceversa.
*
* This platform is made for FLOSSPA and events made by FLOSSPA, please visit https://floss-pa.net/
*/

jQuery(document).ready(function()
{
  //Validación
	$('#login_form_begin').validate
	({
		onkeyup: false,
		doNotHideMessage: true,
		errorElement: 'span',
		errorClass: 'help-block',
		focusInvalid: true,
		highlight: function(element)
		{
			$(element).closest('.form-group').addClass('has-error');
		},
		unhighlight: function(element)
		{
			$(element).closest('.form-group').removeClass('has-error');
		},
		success: function(element)
    {
			$(element).closest('.form-group').addClass('has-success');
    },
		ignore:[]
	});

  //Validación
	$('#form_register').validate
	({
		onkeyup: false,
		doNotHideMessage: true,
		errorElement: 'span',
		errorClass: 'help-block',
		focusInvalid: true,
		highlight: function(element)
		{
			$(element).closest('.form-group').addClass('has-error');
		},
		unhighlight: function(element)
		{
			$(element).closest('.form-group').removeClass('has-error');
		},
		success: function(element)
    {
			$(element).closest('.form-group').addClass('has-success');
		},
		ignore:[],
		submitHandler: function(form)
		{
			//Envío por Ajax
			$.ajax
			({
				url: "../ajaxed.io.php?ajaxproc=AP 001",
				type: 'POST',
				cache: false,
				data: $('#form_register').serialize(),
				success: function (data)
				{
					$("#regreplacer").empty();
					$("#regreplacer").html(data);
				},
				error: function(data)
				{
          alert("Data no enviada");
				}
			});
			return false;
		}
	});

  //Validación
	$('#form_reset').validate
	({
		onkeyup: false,
		doNotHideMessage: true,
		errorElement: 'span',
		errorClass: 'help-block',
		focusInvalid: true,
		highlight: function(element)
		{
			$(element).closest('.form-group').addClass('has-error');
		},
		unhighlight: function(element)
		{
			$(element).closest('.form-group').removeClass('has-error');
		},
		success: function(element)
    {
			$(element).closest('.form-group').addClass('has-success');
		},
		ignore:[],
		submitHandler: function(form)
		{
			//Envío por Ajax
			$.ajax
			({
				url: "../ajaxed.io.php?ajaxproc=AP 002",
				type: 'POST',
				cache: false,
				data: $('#form_reset').serialize(),
				success: function (data)
				{
					$("#resetreplacer").empty();
					$("#resetreplacer").html(data);
				},
				error: function(data)
				{
          alert("Data no enviada");
				}
			});
		}
	});

});
