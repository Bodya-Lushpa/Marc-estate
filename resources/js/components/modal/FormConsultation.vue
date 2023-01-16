<template>
  <div>
    <!-- Modal -->
    <div
      class="modal fade modal-consultation"
      tabindex="-1"
      role="dialog"
      aria-hidden="false"
    >
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4>ПОЛУЧИТЬ КОНСУЛЬТАЦИЮ</h4>
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
            <form
              action=""
              class="col-md-10 m-auto pt-3"
              method="post"
              @submit="submitData(event)"
            >
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
                  id="name"
                  v-model="leadData.name"
                  placeholder="Имя"
                  required="required"
                />
              </div>
              <div class="form-group">
                <input
                  type="text"
                  name="phone"
                  v-model.lazy="leadData.phone"
                  placeholder="Номер"
                  required="required"
                  class="phoneModal"
                />
              </div>
              <div class="form-group">
                <button
                  type="submit"
                  class="theme-btn btn-style-one"
                  :disabled="disabledButton"
                >
                  Отправить
                </button>
              </div>
            </form>
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
        title_form: "Консультация",
        title_project: "",
      },
      disabledButton: false,
    };
  },
  mounted() {
    var mask = IMask(document.querySelector(".phoneModal"), {
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
          $(".modal .close").click();
          $(".openThank").click();
          this.leadData.name = "";
          this.leadData.phone = "";
          this.leadData.text = "";
          fbq("track", "SubmitApplication");
        })
        .catch(function (error) {
          console.log(error);
          this.disabledButton = false;
          $(".modal .close").click();
          this.leadData.name = "";
          this.leadData.phone = "";
          this.leadData.text = "";
          alert(
            "Ошибка отправки заявки, свяжитесь с нами по телефону +7 (777) 666 03 90"
          );
        });
    },
  },
};
</script>