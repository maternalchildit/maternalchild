/**
 * Template Name: Medicio - v4.1.0
 * Template URL: https://bootstrapmade.com/medicio-free-bootstrap-theme/
 * Author: BootstrapMade.com
 * License: https://bootstrapmade.com/license/
 */
function onSubmit(e, token) {
	e.preventDefault();
	console.log(token);
}

(function () {
	'use strict';

	/**
	 * Easy selector helper function
	 */
	const select = (el, all = false) => {
		el = el.trim();
		if (all) {
			return [...document.querySelectorAll(el)];
		} else {
			return document.querySelector(el);
		}
	};

	/**
	 * Easy event listener function
	 */
	const on = (type, el, listener, all = false) => {
		let selectEl = select(el, all);
		if (selectEl) {
			if (all) {
				selectEl.forEach((e) => e.addEventListener(type, listener));
			} else {
				selectEl.addEventListener(type, listener);
			}
		}
	};

	/**
	 * Easy on scroll event listener
	 */
	const onscroll = (el, listener) => {
		el.addEventListener('scroll', listener);
	};

	/**
	 * Navbar links active state on scroll
	 */
	let navbarlinks = select('#navbar .scrollto', true);
	const navbarlinksActive = () => {
		let position = window.scrollY + 200;
		navbarlinks.forEach((navbarlink) => {
			if (!navbarlink.hash) return;
			let section = select(navbarlink.hash);
			if (!section) return;
			if (position >= section.offsetTop && position <= section.offsetTop + section.offsetHeight) {
				navbarlink.classList.add('active');
			} else {
				navbarlink.classList.remove('active');
			}
		});
	};
	window.addEventListener('load', navbarlinksActive);
	onscroll(document, navbarlinksActive);

	/**
	 * Scrolls to an element with header offset
	 */
	const scrollto = (el) => {
		let header = select('#header');
		let offset = header.offsetHeight;

		let elementPos = select(el).offsetTop;
		window.scrollTo({
			top: elementPos - offset,
			behavior: 'smooth',
		});
	};

	/**
	 * Toggle .header-scrolled class to #header when page is scrolled
	 */
	let selectHeader = select('#header');
	let selectTopbar = select('#topbar');
	if (selectHeader) {
		const headerScrolled = () => {
			if (window.scrollY > 100) {
				selectHeader.classList.add('header-scrolled');
				if (selectTopbar) {
					selectTopbar.classList.add('topbar-scrolled');
				}
			} else {
				selectHeader.classList.remove('header-scrolled');
				if (selectTopbar) {
					selectTopbar.classList.remove('topbar-scrolled');
				}
			}
		};
		window.addEventListener('load', headerScrolled);
		onscroll(document, headerScrolled);
	}

	/**
	 * Back to top button
	 */
	let backtotop = select('.back-to-top');
	if (backtotop) {
		const toggleBacktotop = () => {
			if (window.scrollY > 100) {
				backtotop.classList.add('active');
			} else {
				backtotop.classList.remove('active');
			}
		};
		window.addEventListener('load', toggleBacktotop);
		onscroll(document, toggleBacktotop);
	}

	/**
	 * Mobile nav toggle
	 */
	on('click', '.mobile-nav-toggle', function (e) {
		select('#navbar').classList.toggle('navbar-mobile');
		this.classList.toggle('bi-list');
		this.classList.toggle('bi-x');
	});

	/**
	 * Mobile nav dropdowns activate
	 */
	on(
		'click',
		'.navbar .dropdown > a',
		function (e) {
			if (select('#navbar').classList.contains('navbar-mobile')) {
				e.preventDefault();
				this.nextElementSibling.classList.toggle('dropdown-active');
			}
		},
		true,
	);

	/**
	 * Scrool with ofset on links with a class name .scrollto
	 */
	on(
		'click',
		'.scrollto',
		function (e) {
			if (select(this.hash)) {
				e.preventDefault();

				let navbar = select('#navbar');
				if (navbar.classList.contains('navbar-mobile')) {
					navbar.classList.remove('navbar-mobile');
					let navbarToggle = select('.mobile-nav-toggle');
					navbarToggle.classList.toggle('bi-list');
					navbarToggle.classList.toggle('bi-x');
				}
				scrollto(this.hash);
			}
		},
		true,
	);

	/**
	 * Scroll with ofset on page load with hash links in the url
	 */
	window.addEventListener('load', () => {
		if (window.location.hash) {
			if (select(window.location.hash)) {
				scrollto(window.location.hash);
			}
		}
	});

	/**
	 * Preloader
	 */
	let preloader = select('#preloader');
	if (preloader) {
		window.addEventListener('load', () => {
			preloader.remove();
		});
	}

	/**
	 * Hero carousel indicators
	 */
	let heroCarouselIndicators = select('#hero-carousel-indicators');
	let heroCarouselItems = select('#heroCarousel .carousel-item', true);

	heroCarouselItems.forEach((item, index) => {
		index === 0
			? (heroCarouselIndicators.innerHTML +=
					"<li data-bs-target='#heroCarousel' data-bs-slide-to='" + index + "' class='active'></li>")
			: (heroCarouselIndicators.innerHTML +=
					"<li data-bs-target='#heroCarousel' data-bs-slide-to='" + index + "'></li>");
	});

	/**
	 * Testimonials slider
	 */
	new Swiper('.testimonials-slider', {
		speed: 600,
		loop: true,
		autoplay: {
			delay: 5000,
			disableOnInteraction: false,
		},
		slidesPerView: 'auto',
		pagination: {
			el: '.swiper-pagination',
			type: 'bullets',
			clickable: true,
		},
		breakpoints: {
			320: {
				slidesPerView: 1,
				spaceBetween: 20,
			},

			1200: {
				slidesPerView: 3,
				spaceBetween: 20,
			},
		},
	});

	/**
	 * Clients Slider
	 */
	new Swiper('.gallery-slider', {
		speed: 400,
		loop: true,
		centeredSlides: true,
		autoplay: {
			delay: 5000,
			disableOnInteraction: false,
		},
		slidesPerView: 'auto',
		pagination: {
			el: '.swiper-pagination',
			type: 'bullets',
			clickable: true,
		},
		breakpoints: {
			320: {
				slidesPerView: 1,
				spaceBetween: 20,
			},
			640: {
				slidesPerView: 3,
				spaceBetween: 20,
			},
			992: {
				slidesPerView: 5,
				spaceBetween: 20,
			},
		},
	});

	/**
	 * Initiate gallery lightbox
	 */
	const galleryLightbox = GLightbox({
		selector: '.gallery-lightbox',
	});

	/**
	 * Animation on scroll
	 */
	window.addEventListener('load', () => {
		AOS.init({
			duration: 1000,
			easing: 'ease-in-out',
			once: true,
			mirror: false,
		});
	});

	// creating testimonial form
	window.addEventListener('load', () => {
		const testimonialForm = document.getElementById('testimonial-form');
		if (testimonialForm) {
			testimonialForm.addEventListener('submit', validateTestimonial);
		}
		const testPic = document.getElementById('testpic');
		const witnessPic = document.getElementById('witnesspic');
		if (witnessPic) {
			witnessPic.addEventListener('change', () => {
				const file = witnessPic.files[0];
				if (file) {
					testPic.src = URL.createObjectURL(file);
					testPic.style.display = 'block';
				} else {
					testPic.style.display = 'none';
				}
			});
		}
	});

	// Booking appointment form
	window.addEventListener('load', () => {
		const appointmentForm = document.getElementById('appointment-form');
		if (appointmentForm) {
			appointmentForm.addEventListener('submit', function (e) {
				e.preventDefault();

				let thisForm = this;

				const formdata = new FormData();

				const name = document.querySelector('#app_name');
				const email = document.querySelector('#app_email');
				const phone = document.querySelector('#app_phone');
				const date = document.querySelector('#app_date');
				// const department = document.querySelector('#app_department');
				// const doctor = document.querySelector('#app_doctor');
				const message = document.querySelector('#app_message');

				if (grecaptcha.getResponse()) {
					formdata.append('g-recaptcha-response', grecaptcha.getResponse());
					formdata.append('name', name.value);
					formdata.append('email', email.value);
					formdata.append('phone', phone.value);
					formdata.append('date', date.value);
					// formdata.append('department', department.value);
					// formdata.append('doctor', doctor.value);
					formdata.append('message', message.value);

					thisForm.querySelector('.loading').classList.add('d-block');

					(async () => {
						try {
							const response = await fetch('/forms/appointment.php', { method: 'POST', body: formdata });
							const json = await response.json();

							if (json.ok) {
								createAlert('Your application is in processing. More information in your mail.');
								document.querySelector('#appointment-form').reset();
							} else {
								createAlert(json.error);
							}
							thisForm.querySelector('.loading').classList.remove('d-block');
						} catch (err) {
							console.error(err);
							thisForm.querySelector('.loading').classList.remove('d-block');
						}
					})();
				} else {
					createAlert('ReCAPTCHA not verified');
				}
			});
		}
	});

	// Contact form
	window.addEventListener('load', () => {
		const subscribeForm = document.getElementById('subscribeForm');
		if (subscribeForm) {
			subscribeForm.addEventListener('submit', submitForm);
		}
		const contactForm = document.getElementById('contact-form');
		if (contactForm) {
			contactForm.addEventListener('submit', function (e) {
				e.preventDefault();
				let thisForm = this;

				const name = thisForm.querySelector('#name');
				const email = thisForm.querySelector('#email');
				const subject = thisForm.querySelector('#subject');
				const message = thisForm.querySelector('#message');

				const formdata = new FormData();
				formdata.append('name', name.value);
				formdata.append('email', email.value);
				formdata.append('subject', subject.value);
				formdata.append('message', message.value);

				thisForm.querySelector("button[type='submit']").disabled = true;

				(async () => {
					try {
						const response = await fetch('/forms/contact.php', { method: 'POST', body: formdata });
						const json = await response.json();

						if (json.ok) {
							createAlert('Your message was delivered successfully');
						} else {
							createAlert('There seems to be a problem delivering your message. Please try again later.');
						}
						thisForm.reset();
					} catch (err) {
						console.error(err);
						createAlert('An error occurred');
					} finally {
						thisForm.querySelector("button[type='submit']").disabled = false;
					}
				})();
			});
		}
	});
})();

function validateTestimonial(e) {
	e.preventDefault();
	const name = document.querySelector('#witness');
	const description = document.querySelector('#description');
	const testimonial = document.querySelector('#testimonial');
	const email = document.querySelector('#testimonial-email');
	const imgFile = document.querySelector('#witnesspic');

	name.value = name.value.trim();
	description.value = description.value.trim();
	testimonial.value = testimonial.value.trim();
	email.value = email.value.trim();

	if (!name.value || !testimonial.value || !imgFile.files || !email.value) {
		console.log(false);
		return false;
	}

	const formdata = new FormData();
	formdata.append('witness', name.value);
	formdata.append('email', email.value);
	formdata.append('description', description.value);
	formdata.append('testimonial', testimonial.value);
	formdata.append('witnesspic', imgFile.files[0]);

	(async () => {
		try {
			const response = await fetch('/forms/testimonial.php', { method: 'POST', body: formdata });
			const json = await response.json();

			if (json.status === 'ok') {
				document.querySelector('#testimonial-form').reset();
        imgFile.src = '';
				createAlert('Testimonial posted successfully');
			}
		} catch (e) {
			console.error(e);
		}
	})();
}

function createAlert(text) {
	const div = document.createElement('div');
	div.className = 'alert alert-success alert-dismissible show';
	div.style.position = 'fixed';
	div.style.top = '15px';
	div.style.right = '15px';
	div.style.zIndex = '1000';

	div.innerHTML = `<small>${text}</small>`;

	document.body.appendChild(div);

	setTimeout(() => {
		document.body.removeChild(div);
	}, 3000);
}

function submitForm(e) {
	e.preventDefault();

	let thisForm = this;
	let formdata = new FormData(thisForm);
	const action = thisForm.getAttribute('action');

	(async () => {
		try {
			const response = await fetch(action, { method: 'POST', body: formdata });
			const json = await response.json();

			if (json.ok) {
				createAlert('Successfull');
			} else {
				createAlert(json.error || 'An error occured. Please try again later');
			}
		} catch (err) {
			console.error(err);
			createAlert('An error occured');
		}
	})();
}
