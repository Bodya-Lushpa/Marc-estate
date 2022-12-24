<template>
  <div>
    <button
      type="button"
      class="btn btn-primary openThank d-none"
      data-toggle="modal"
      data-target=".modal-thanks"
    ></button>
    <!-- Modal -->
    <div
      class="modal fade modal-thanks"
      tabindex="-1"
      role="dialog"
      aria-hidden="false"
    >
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button
              type="button"
              class="close"
              data-dismiss="modal"
              aria-label="Close"
            >
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body text-center">
            <h4>Cпасибо за заявку!</h4>
            <p class="mb-5">С вами свяжется наш менеджер</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import axios from "axios";

export default {
  data() {
    return {};
  },
};
</script>