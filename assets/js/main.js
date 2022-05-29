// Scroll for Navbar
$(function () {
	$(window).on('scroll', function () {
		if ($(window).scrollTop() > 10) {
			$('.navbar').addClass('active')
		} else {
			$('.navbar').removeClass('active')
		}
	})
})

// login Alert
const alert = document.getElementById('login-alert')

setTimeout(function () {
	$(alert).remove('#login-alert')
}, 1500)
