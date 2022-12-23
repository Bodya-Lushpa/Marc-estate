<template>
  <!-- Review Comment Form -->
  <div class="review-comment-form">
    <h4>Консультация</h4>
    <form action="" method="post" @submit="submitData(event)">
      <input type="hidden" name="_token" :value="csrf" />
      <input type="hidden" name="title_form" value="Консультация" />
      <input type="hidden" name="title_project" value="" />
      <div class="row">
        <div class="form-group col-lg-6 col-md-12 col-sm-12">
          {{ name }}
          <input
            type="text"
            name="name"
            placeholder="Введите имя"
            v-model="leadData.name"
            required
          />
        </div>
        <div class="form-group col-lg-6 col-md-12 col-sm-12">
          {{ phone }}
          <input
            type="text"
            name="phone"
            class="phoneFull"
            v-model="leadData.phone"
            placeholder="Номер телефона"
            required
          />
        </div>
        {{ text }}
        <div class="form-group col-lg-12 col-md-12 col-sm-12">
          <textarea
            name="text"
            v-model="leadData.text"
            placeholder="Задайте нам вопрос"
          ></textarea>
        </div>
        <div class="form-group col-lg-12 col-md-12 col-sm-12 text-center">
          <button
            class="theme-btn btn-style-one"
            type="submit"
            :disabled="disabledButton"
          >
            Получить консультацию
          </button>
        </div>
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
    title_project: String,
  },
  data() {
    return {
      leadData: {
        _token: this.csrf,
        name: "",
        phone: "",
        text: "",
        title_form: "Консультация",
        title_project: this.title_project,
      },
      disabledButton: false,
    };
  },
  mounted() {
    var Mask2 = IMask(document.querySelector(".phoneFull"), {
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
        })
        .catch(function (error) {
          console.log(error);
          this.disabledButton = false;
        });
    },
  },
};
</script>