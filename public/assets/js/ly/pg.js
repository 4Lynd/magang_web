document.addEventListener("DOMContentLoaded", function () {
    // Search functionality
    const searchInput = document.getElementById("searchInput");
    const roleFilter = document.getElementById("roleFilter");
    const statusFilter = document.getElementById("statusFilter");
    const resetBtn = document.getElementById("resetBtn");
    const userRows = document.querySelectorAll(".user-row");

    // Filter function
    function filterTable() {
        const searchTerm = searchInput.value.toLowerCase();
        const roleValue = roleFilter.value;
        const statusValue = statusFilter.value;

        userRows.forEach((row) => {
            const name = row
                .querySelector("td:nth-child(2)")
                .textContent.toLowerCase();
            const email = row
                .querySelector("td:nth-child(4)")
                .textContent.toLowerCase();
            const role = row.dataset.role;
            const status = row.dataset.status;

            const matchesSearch =
                name.includes(searchTerm) || email.includes(searchTerm);
            const matchesRole = !roleValue || role === roleValue;
            const matchesStatus = !statusValue || status === statusValue;

            row.style.display =
                matchesSearch && matchesRole && matchesStatus ? "" : "none";
        });
    }

    // Event listeners for filters
    searchInput.addEventListener("input", filterTable);
    roleFilter.addEventListener("change", filterTable);
    statusFilter.addEventListener("change", filterTable);

    // Reset filters
    resetBtn.addEventListener("click", function () {
        searchInput.value = "";
        roleFilter.value = "";
        statusFilter.value = "";
        filterTable();
    });

    // Sorting functionality
    document.querySelectorAll(".sortable").forEach((header) => {
        header.addEventListener("click", function () {
            const sortBy = this.dataset.sort;
            const icon = this.querySelector("i");

            // Reset all other icons
            document.querySelectorAll(".sortable i").forEach((i) => {
                if (i !== icon) {
                    i.className = "bi bi-arrow-down-up text-muted ms-1";
                }
            });

            // Toggle current icon
            if (icon.classList.contains("bi-arrow-down-up")) {
                icon.className = "bi bi-sort-down text-primary ms-1";
            } else if (icon.classList.contains("bi-sort-down")) {
                icon.className = "bi bi-sort-up text-primary ms-1";
            } else {
                icon.className = "bi bi-sort-down text-primary ms-1";
            }

            // Here you would implement actual sorting
            console.log("Sorting by:", sortBy);
        });
    });

    // Checkbox functionality
    const selectAll = document.getElementById("selectAll");
    const userCheckboxes = document.querySelectorAll(".user-checkbox");
    const bulkActions = document.getElementById("bulkActions");
    const selectedCount = document.getElementById("selectedCount");
    const clearSelection = document.getElementById("clearSelection");

    // Select all functionality
    selectAll.addEventListener("change", function () {
        userCheckboxes.forEach((checkbox) => {
            checkbox.checked = this.checked;
        });
        updateBulkActions();
    });

    // Individual checkbox functionality
    userCheckboxes.forEach((checkbox) => {
        checkbox.addEventListener("change", updateBulkActions);
    });

    // Update bulk actions toolbar
    function updateBulkActions() {
        const checkedBoxes = document.querySelectorAll(
            ".user-checkbox:checked"
        );
        const count = checkedBoxes.length;

        selectedCount.textContent = count;

        if (count > 0) {
            bulkActions.classList.remove("d-none");
        } else {
            bulkActions.classList.add("d-none");
        }

        // Update select all checkbox
        selectAll.checked = count === userCheckboxes.length;
        selectAll.indeterminate = count > 0 && count < userCheckboxes.length;
    }

    // Clear selection
    clearSelection.addEventListener("click", function () {
        selectAll.checked = false;
        userCheckboxes.forEach((checkbox) => {
            checkbox.checked = false;
        });
        updateBulkActions();
    });
});
