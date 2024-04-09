<!-- Modal -->
<center>
    <div class="modal fade" id="createPartnerModal" tabindex="-1" role="dialog" aria-labelledby="createPartnerModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document"> <!-- Adicionada a classe modal-dialog-centered aqui -->
            <div class="modal-content">
                <form wire:submit.prevent="store">
                    <div class="modal-body">
                        <form wire:submit.prevent="store">
                            <div class="modal-body">
                                <!-- Name Field -->
                                <div class="modal-body">
                                    <!-- Name Field -->
                                    <div class="form-group mb-3"> <!-- Adicione a classe mb-3 aqui -->
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" id="name" wire:model="name" required>
                                    </div>

                                    <!-- Membership Type Field -->
                                    <div class="form-group mb-3"> <!-- E aqui -->
                                        <label for="membership_type">Membership Type</label>
                                        <select class="form-control" id="membership_type" wire:model="membership_type" required>
                                            <option value="">Choose...</option>
                                            <option value="silver">Silver</option>
                                            <option value="gold">Gold</option>
                                        </select>
                                    </div>

                                    <!-- Address Fields -->
                                    <div class="form-group mb-3"> <!-- E aqui -->
                                        <label for="address_street">Street Address</label>
                                        <input type="text" class="form-control" id="address_street" wire:model="address.street" required>
                                    </div>
                                    <div class="form-group mb-3"> <!-- E aqui -->
                                        <label for="address_city">City</label>
                                        <input type="text" class="form-control" id="address_city" wire:model="address.city" required>
                                    </div>
                                    <div class="form-group mb-3"> <!-- E aqui -->
                                        <label for="address_state">State</label>
                                        <input type="text" class="form-control" id="address_state" wire:model="address.state" required>
                                    </div>
                                    <div class="form-group mb-3"> <!-- E aqui, também -->
                                        <label for="address_zip">Zip Code</label>
                                        <input type="text" class="form-control" id="address_zip" wire:model="address.zip" required>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save Partner</button>
                                </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save Partner</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</center>