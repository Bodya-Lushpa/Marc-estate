<template>
  <!-- Contact Form -->
  <div class="contact-form">
    <form action="" method="post" @submit="submitData(event)">
      <div class="form-group">
        <input
          type="text"
          name="name"
          v-model="leadData.name"
          placeholder="Имя"
          required
        />
      </div>

      <div class="form-group">
        <input
          type="text"
          name="phone"
          class="phoneWidget"
          v-model="leadData.phone"
          placeholder="Телефон"
          required
        />
      </div>

      <div class="form-group">
        <textarea
          name="text"
          v-model="leadData.text"
          placeholder="Сообщение"
        ></textarea>
      </div>

      <div class="form-group">
        <button class="theme-btn btn-style-one" type="submit">Отправить</button>
      </div>
    </form>

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
  props: {
    csrf: String,
  },
  data() {
    return {
      leadData: {
        _token: this.csrf,
        name: "",
        phone: "",
        text: "",
        title_form: "Связаться с нами",
      },
    };
  },
  mounted() {
    var mask = IMask(document.querySelector(".phoneWidget"), {
      mask: "+{7}(000)000-00-00",
    });
  },
  methods: {
    submitData() {
      event.preventDefault();
      axios
        .post("/leadSubmit", this.leadData)
        .then((response) => {
          $(".openThank").click();
          this.leadData.name = "";
          this.leadData.phone = "";
          this.leadData.text = "";
        })
        .catch(function (error) {
          console.log(error);
        });
    },
  },
};
</script>