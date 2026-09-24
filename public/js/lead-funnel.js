(function () {
  var overlay = document.getElementById('modalOverlay');
  var openBtn = document.getElementById('openModal');
  var closeBtn = document.getElementById('closeModal');
  var stepForm = document.getElementById('stepForm');
  var stepVideo = document.getElementById('stepVideo');
  var leadForm = document.getElementById('leadForm');
  var formStatus = document.getElementById('formStatus');
  var submitBtn = leadForm.querySelector('button[type=submit]');

  function openModal() {
    overlay.classList.add('open');
    document.body.style.overflow = 'hidden';
  }

  function closeModal() {
    overlay.classList.remove('open');
    document.body.style.overflow = '';
  }

  function resetToForm() {
    stepVideo.hidden = true;
    stepForm.hidden = false;
  }

  openBtn.addEventListener('click', openModal);
  closeBtn.addEventListener('click', function () {
    closeModal();
    resetToForm();
  });

  overlay.addEventListener('click', function (e) {
    if (e.target === overlay) {
      closeModal();
      resetToForm();
    }
  });

  leadForm.addEventListener('submit', function (e) {
    e.preventDefault();
    if (!leadForm.checkValidity()) {
      leadForm.reportValidity();
      return;
    }
    formStatus.style.color = 'var(--muted)';
    formStatus.textContent = 'Sending…';
    submitBtn.disabled = true;

    fetch(leadForm.action, {
      method: 'POST',
      body: new FormData(leadForm),
      headers: { 'Accept': 'application/json' }
    })
      .then(function (response) {
        if (!response.ok) throw new Error('bad response');
        formStatus.textContent = '';
        leadForm.reset();
        stepForm.hidden = true;
        stepVideo.hidden = false;
      })
      .catch(function () {
        formStatus.style.color = 'var(--signal)';
        formStatus.textContent = 'Something went wrong — please try again.';
      })
      .finally(function () {
        submitBtn.disabled = false;
      });
  });
})();
