<template>
    <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content c-square">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="exampleModalLabel">Registreeri</h4>
                </div>
                <div class="modal-body">
                    <div class="alert alert-info" role="alert">Регистрируюясь здесь Вы регистрируетесь на пробную тренировку. Всю информацию о пробной тренировке вы получите на е-маил. После пробной тренировки вы получите информацию как зарегестрироваться в клуб.</div>
                    <form>
                        <div class="form-group">
                            <label for="recipient-name" class="control-label">Rühm:</label>
                            <select class="form-control c-square" v-model="group">
                                <option v-for="(g, i) in groups" :key="i" :value="g.id" v-text="g.name"></option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="control-label">Lapse nimi:</label>
                            <input type="text" class="form-control c-square" v-model="gymnastName">
                        </div>
                         <div class="form-group">
                            <label for="recipient-name" class="control-label">Lapse vanus:</label>
                            <input type="number" class="form-control c-square" v-model="gymnastAge">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="control-label">Kontaktisiku nimi:</label>
                            <input type="text" class="form-control c-square" v-model="contact_name">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="control-label">Kontaktisiku e-post:</label>
                            <input type="email" class="form-control c-square" v-model="contact_email">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="control-label">Kontaktisiku telefon:</label>
                            <input type="email" class="form-control c-square" v-model="contact_phone">
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="control-label">Kommentaar:</label>
                            <textarea class="form-control  c-square" v-model="notes"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn c-theme-btn c-btn-square c-btn-bold c-btn-uppercase" @click="register">Registreeri</button>
                    <button type="button" class="btn c-theme-btn c-btn-border-2x c-btn-square c-btn-bold c-btn-uppercase" data-dismiss="modal">Sulge</button>
                </div>
            </div>
        </div>
    </div>

</template>

<script>
    export default {
        mounted() {
            // $(this.$el).modal('show');

            axios.get('/api/groups').then(response => {
                this.groups = response.data;
            })
        },

        data() {
            return {
                gymnastName: '',
                gymnastAge: '',
                contact_name: '',
                contact_email: '',
                contact_phone: '',
                group: '',
                notes: '',
                groups: ''
            }
        },

        methods: {
            register() {
                axios.post('/api/register', {
                    group_id: this.group,
                    name: this.gymnastName,
                    age: this.gymnastAge,
                    contact_name: this.contact_name,
                    contact_email: this.contact_email,
                    contact_phone: this.contact_phone,
                    notes: this.notes
                }).then(response => {
                    console.log(response);
                })
            }
        }
    }
</script>

<style>
 .modal {
     z-index: 10000;
 }
</style>

