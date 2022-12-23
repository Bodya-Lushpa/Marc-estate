<template>
  <!-- Agent Form Widget -->
  <div class="sidebar-widget agent-from-widget">
    <div class="sidebar-title">
      <h2>Получить консультацию</h2>
    </div>
    <div class="widget-content">
      <div class="agent-form">
        <form action="" method="post" @submit="submitData(event)">
          <input type="hidden" name="_token" :value="csrf" />
          <input
            type="hidden"
            name="title_form"
            value="ПОЛУЧИТЬ КОНСУЛЬТАЦИЮ"
          />
          <input type="hidden" name="title_project" value="" />
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
              v-model="leadData.phone"
              class="phoneWidget"
              placeholder="Номер"
              required
            />
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
    </div>

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
        })
        .catch(function (error) {
          console.log(error);
          this.disabledButton = false;
        });
    },
  },
};
</script>