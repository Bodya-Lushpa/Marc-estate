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
          v-model.lazy="leadData.phone"
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
        <button
          class="theme-btn btn-style-one"
          type="submit"
          :disabled="disabledButton"
        >
          Отправить
        </button>
      </div>
    </form>
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
      disabledButton: false,
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
      this.disabledButton = true;
      axios
        .post("/leadSubmit", this.leadData)
        .then((response) => {
          this.disabledButton = false;
          $(".openThank").click();
          this.leadData.name = "";
          this.leadData.phone = "";
          this.leadData.text = "";
					fbq('track', 'SubmitApplication');
        })
        .catch(function (error) {
          console.log(error);
          this.disabledButton = false;
        });
    },
  },
};
</script>