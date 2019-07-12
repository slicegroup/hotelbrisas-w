
# frozen_string_literal: true

require_dependency "keppler_booking/application_controller"
module KepplerBooking
  module Admin
    # ImagesController
    class ImagesController < ::Admin::AdminController
      layout 'keppler_booking/admin/layouts/application'
      before_action :set_image, only: %i[show edit update destroy]
      before_action :index_variables
      include ObjectQuery

      # GET /bookings
      def index
        respond_to_formats(@images)
        redirect_to_index(@objects)
      end

      # GET /bookings/1
      def show; end

      # GET /bookings/new
      def new
        @image = Image.new
      end

      # GET /bookings/1/edit
      def edit; end

      # POST /bookings
      def create
        @image = Image.new(image_params)

        if @image.save
          redirect(@image, params)
        else
          render :new
        end
      end

      # PATCH/PUT /bookings/1
      def update
        if @image.update(image_params)
          redirect(@image, params)
        else
          render :edit
        end
      end

      def clone
        @image = Image.clone_record params[:image_id]
        @image.save
        redirect_to_index(@objects)
      end

      # DELETE /bookings/1
      def destroy
        @image.destroy
        redirect_to_index(@objects)
      end

      def destroy_multiple
        Image.destroy redefine_ids(params[:multiple_ids])
        redirect_to_index(@objects)
      end

      def upload
        Image.upload(params[:file])
        redirect_to_index(@objects)
      end

      def reload; end

      def sort
        Image.sorter(params[:row])
      end

      private

      def index_variables
        @q = Image.ransack(params[:q])
        @images = @q.result(distinct: true)
        @objects = @images.page(@current_page).order(position: :asc)
        @total = @images.size
        @attributes = Image.index_attributes
      end

      # Use callbacks to share common setup or constraints between actions.
      def set_image
        @image = Image.find(params[:id])
      end

      # Only allow a trusted parameter "white list" through.
      def image_params
        params.require(:image).permit(
          :img, :room_id
        )
      end
    end
  end
end
