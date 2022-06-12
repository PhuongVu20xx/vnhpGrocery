import React, { Component } from "react";
import "./AdminController.css";
import "bootstrap/dist/css/bootstrap.min.css";

class AddCategoryForm extends Component {
    render() {
        return (
            <div class="row">
                <div class="col-md-3"></div>
                <div id="addcategoryform">
                    <div class="card mb-4">
                        <form
                            action="/addcategory"
                            method="post"
                            class="form-horizontal"
                        >
                            <div class="card-header ">Add Category</div>
                            <div class="card-body">
                                <div class="form-group">
                                    <div class="col-md-1"></div>
                                    <label
                                        class="col-sm-2 control-label"
                                        for="category-root"
                                    >
                                        Category Root
                                    </label>

                                    <div class="col-sm-8">
                                        <select
                                            class="form-control"
                                            name="category_root"
                                            id="category_root"
                                        >
                                            {/* @foreach ($categories as $category)
                                        <option value="{{ $category->category_name }}" placeholder="Choose category">
                                            {{ $category->category_name }}
                                        </option>
                                    @endforeach */}
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-1"></div>
                                    <label
                                        class="col-sm-2 control-label"
                                        for="category_name"
                                    >
                                        Category Name
                                    </label>

                                    <div class="col-sm-8">
                                        {/* <input class="form-control" id="category_name" name="category_name" type="text"> */}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-1"></div>
                                    <label
                                        class="col-sm-2 control-label"
                                        for="status-category"
                                    >
                                        Status Category
                                    </label>

                                    <div class="col-sm-4">
                                        <div class="TriSea-technologies-Switch pull-right">
                                            {/* <input id="TriSeaDefault" name="TriSea1" type="checkbox"> */}
                                            <label
                                                for="TriSeaDefault"
                                                class="label-default"
                                            ></label>
                                        </div>
                                    </div>
                                </div>

                                <div id="submit_button" class="button">
                                    <span id="btn_submit" class="btn">
                                        Save
                                    </span>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-3"></div>
            </div>
        );
    }
}

export default AddCategoryForm;
