 function showState(id) {
      document.querySelectorAll('.nfc-state').forEach(el => el.classList.add('d-none'));
      document.getElementById(id).classList.remove('d-none');
    }

    function resetModal() {
      showState('nfc-waiting');
      document.getElementById('btn-retry').classList.remove('d-none');
      document.getElementById('btn-finish').classList.add('d-none');
    }

    function startProcess() {
      showState('nfc-waiting');

      // Aguarda 2s, depois vai para "processando"
      setTimeout(() => {
        showState('nfc-processing');

        // Mais 2s e aprova pagamento
        setTimeout(() => {
          document.getElementById('card-last-digits').textContent =
            (Math.floor(Math.random() * 9000) + 1000).toString();

          document.getElementById('transaction-amount').textContent = '5.30';

          document.getElementById('transaction-id').textContent = 'TXN' + Date.now();

          showState('nfc-success');
          document.getElementById('btn-retry').classList.add('d-none');
          document.getElementById('btn-finish').classList.remove('d-none');
        }, 2000);
      }, 2000);
    }

    document.addEventListener('DOMContentLoaded', () => {
      const modalEl = document.getElementById('nfcModal');

      modalEl.addEventListener('show.bs.modal', resetModal);
      modalEl.addEventListener('shown.bs.modal', () => setTimeout(startProcess, 1000));

      document.getElementById('btn-retry').addEventListener('click', () => {
        resetModal();
        startProcess();
      });
    });